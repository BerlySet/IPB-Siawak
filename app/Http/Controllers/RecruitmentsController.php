<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;
use App\Models\Chairman;
use App\Models\Event;
use App\Models\Division;
use App\Models\Staff;
use App\Models\Registrant;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RecruitmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /// Tampilkan compact data untuk halaman recruitment
    public function index()
    {
        $user = Auth::user();
        $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login
        $recruitment = Recruitment::where('rec_idormawa', $chairman[0]->c_idormawa)->get();
        $datenow = Carbon::now();
        $datenow = $datenow->toDateString();

        for ($i=0; $i < count($recruitment); $i++) { 
            if ( $recruitment[$i]->is_canceled == 1 ) {
                $recruitment[$i]->status = 'Canceled';
            } else if ( $recruitment[$i]->start_date <= $datenow && $recruitment[$i]->end_date >= $datenow ) {
                $recruitment[$i]->status = 'Running';
            } else if ( $recruitment[$i]->start_date > $datenow ) {
                $recruitment[$i]->status = 'Upcoming';
            } else if ( $recruitment[$i]->end_date < $datenow ) {
                $recruitment[$i]->status = 'Completed';
            }
        }

        // dump($recruitment);

        return view('recruit/recruitments', compact('recruitment','user'));
    }
    
    public function show_running() {
        $user = Auth::user();
        $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login
        
        $datenow = Carbon::now();
        $datestring = $datenow->toDateString();
        $currentdate = date('Y-m-d', strtotime($datestring));

        $recruitment = Recruitment::where('rec_idormawa', $chairman[0]->c_idormawa)
                        ->where('start_date','<=', $currentdate)
                        ->where('end_date','>=', $currentdate)
                        ->where('is_canceled', '!=', true)
                        ->get();

        // return($recruitment);
        return view('recruit/rec_running', compact('recruitment','user'));
    }

    public function show_completed() {
        $user = Auth::user();
        $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login
        
        $datenow = Carbon::now();
        $datestring = $datenow->toDateString();
        $currentdate = date('Y-m-d', strtotime($datestring));

        $recruitment = Recruitment::where('rec_idormawa', $chairman[0]->c_idormawa)
                        ->where('end_date','<=', $currentdate)
                        ->where('is_canceled', '!=', true)
                        ->get();

        // return($recruitment);
        return view('recruit/rec_complete', compact('recruitment','user'));
    }

    public function show_upcoming() {
        $user = Auth::user();
        $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login
        
        $datenow = Carbon::now();
        $datestring = $datenow->toDateString();
        $currentdate = date('Y-m-d', strtotime($datestring));

        $recruitment = Recruitment::where('rec_idormawa', $chairman[0]->c_idormawa)
                        ->where('start_date','>=', $currentdate)
                        ->where('is_canceled', '!=', true)
                        ->get();

        // return($recruitment);
        return view('recruit/rec_upcoming', compact('recruitment','user'));
    }

    public function show_canceled() {
        $user = Auth::user();
        $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login
        
        $datenow = Carbon::now();
        $datestring = $datenow->toDateString();
        $currentdate = date('Y-m-d', strtotime($datestring));

        $recruitment = Recruitment::where('rec_idormawa', $chairman[0]->c_idormawa)
                        ->where('is_canceled', '=', true)
                        ->get();

        // return($recruitment);
        return view('recruit/rec_canceled', compact('recruitment','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login
        $recruitment = Recruitment::where('rec_idormawa', $chairman[0]->c_idormawa)->get();
        return view('recruit/create',compact('recruitment','user'));
    }

    // public function data()
    // {
    //     $user = Auth::user();
    //     $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login
    //     $recruitment = Recruitment::where('rec_idormawa', $chairman[0]->c_idormawa)->get();
    //     return view('recruit/data',compact('recruitment','user'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return($request);

        $user = Auth::user();
        $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login

        $request->validate([
            'judul'=>'required',
            'tahun_akademik'=>'required',
            'kategori'=>'required',
            'nama_event'=>'required',
            'kriteria_pendaftar'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'divisi'=>'required',
        ],
    
        [
            'judul.required'=>'Judul belum diisi',
            'tahun_akademik.required'=>'NIM belum diisi',
            'kategori.required'=>'Kategori belum diisi',
            'nama_event.required'=>'Nama Event belum diisi',
            'kriteria_pendaftar.required'=>'Kriteria Pendaftar belum diisi',
            'start_date.required'=>'Tanggal Mulai belum diisi',
            'end_date.required'=>'Tanggal Selesai belum diisi',
            'divisi.required'=>'Pilihan Divisi belum diisi',
        ]);

        Event::create([
            'nama_event' => $request->nama_event,
            'kategori' => $request->kategori,
            'tahun_akademik' => $request->tahun_akademik,
            'e_idormawa' => $chairman[0]->c_idormawa,
        ]);

        $event = Event::where('nama_event', $request->nama_event)
        ->where('kategori', $request->kategori)
        ->get();
        
        for ($i=0; $i < count($request->divisi); $i++) { 
            // $div = Division::where('nama_divisi', $divisi->nama_divisi)->get();
            // if (!count($div)) {
            
            Division::create([
                'nama_divisi' => $request->divisi[$i],
                'd_idevent' => $event[0]->id,
            ]);
            // }
        }

        Recruitment::create([
            'judul' => $request->judul,
            'kriteria_pendaftar' => $request->kriteria_pendaftar,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'is_canceled' => 0,
            'rec_idormawa' => $chairman[0]->c_idormawa,
            'rec_idevent' => $event[0]->id,
        ]);
        
        return redirect('/recruitments')->with('status', 'Perekrutan Berhasil Dibuat!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $registrant = Registrant::where('reg_idrec', $id)
        ->where('status', NULL)
        ->join('users', 'registrants.reg_nim', '=', 'users.nim')
        ->select('registrants.id', 'registrants.divisi_1', 'registrants.divisi_2', 'registrants.status',
                'registrants.reg_idrec', 'registrants.reg_nim', 'users.nim', 'users.nama',
                'users.jenis_kelamin', 'users.tempat_lahir', 'users.tanggal_lahir', 'users.tahun_masuk',
                'users.agama', 'users.departemen', 'users.fakultas', 'users.no_handphone', 'users.email')
        ->get();

        for ($i=0; $i < count($registrant); $i++) { 
            $div1 = Division::where('id', $registrant[$i]->divisi_1)->get();
            $div2 = Division::where('id', $registrant[$i]->divisi_2)->get();
            $registrant[$i]->nmdivisi_1 = $div1[0]->nama_divisi;
            $registrant[$i]->nmdivisi_2 = $div2[0]->nama_divisi;

            // $staff = Staff::where('s_nim', $registrant[$i]->nim)
            //         ->join('events', 'staff.s_idevent', '=', 'events.id')
            //         ->join('divisions', 'staff.s_iddivisi', '=', 'divisions.id') 
            //         ->join('organizations', 'events.e_idormawa', '=', 'organizations.id') 
            //         ->get();
                    
            // $registrant[$i]->staff = $staff;
        }

        // dump($registrant);
        return view('recruit/data',compact('registrant','user','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recruitment = Recruitment::findOrFail($id);
        return view('recruit/edit', compact('recruitment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login

        $request->validate([
            'judul'=>'required',
            'tahun_akademik'=>'required',
            'kategori'=>'required',
            'nama_event'=>'required',
            'kriteria_pendaftar'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'divisi'=>'required',
        ],
    
        [
            'judul.required'=>'Judul belum diisi',
            'tahun_akademik.required'=>'NIM belum diisi',
            'kategori.required'=>'Kategori belum diisi',
            'nama_event.required'=>'Nama Event belum diisi',
            'kriteria_pendaftar.required'=>'Kriteria Pendaftar belum diisi',
            'start_date.required'=>'Tanggal Mulai belum diisi',
            'end_date.required'=>'Tanggal Selesai belum diisi',
            'divisi.required'=>'Pilihan Divisi belum diisi',
        ]);

        Recruitment::where('id', $id)
                ->update([
                    'judul' => $request->judul,
                    'tahun_akademik' => $request->tahun_akademik,
                    'kriteria_pendaftar' => $request->kriteria_pendaftar,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'rec_idormawa' => $chairman[0]->c_idormawa,
                    // 'rec_idevent' => id event yang baru di create
                ]);
        return redirect('recruit/recruitments')->with('status', 'Data Berhasil Diubah!');
        
        // TODO EDIT DIVISI + EVENT
        // Event::create([
        //     'nama_event' => $request->nama_event,
        //     'kategori' => $request->kategori,
        //     'e_idormawa' => $chairman[0]->c_idormawa,
        // ]);
        
        // for ($i=0; $i < length($divisi); $i++) { 
        //     // $div = Division::where('nama_divisi', $divisi->nama_divisi)->get();
        //     // if (!count($div)) {
            
        //     Division::create([
        //         'nama_divisi' => $request->nama_divisi,
        //         'd_idevent' => $request->tahun_akademik,
        //     ]);
        //     // }
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recruitment::destroy($id);
        return redirect('recruit/recruitments')->with('status', 'Data Berhasil Dihapus!');
    }

    public function terima_user(Request $request) {

        $registrant = Registrant::where('id', $request->id_registrant)->get();
        $recruitment = Recruitment::where('id', $registrant[0]->reg_idrec)->get();
     
        Staff::create([
            'jabatan' => 'Staff',
            'tahun_jabatan' => 2020,
            'status' => 1,
            's_idevent' => $recruitment[0]->rec_idevent,
            's_iddivisi' => $request->id_divisi_1,
            's_nim' => $registrant[0]->reg_nim,
        ]);

        Registrant::where('id', $request->id_registrant)
                ->update([
                    'status' => 1,
                ]);

        return redirect('recruitments/data/'.$request->id_oprec)->with('status', 'Pendaftar Berhasil Diterima!');
    }

    public function tolak_user(Request $request) {

        // return($request);

        Registrant::where('id', $request->id_registrant)
                ->update([
                    'status' => 0,
                ]);

        return redirect('recruitments/data/'.$request->id_oprec)->with('error', 'Pendaftar Berhasil Ditolak!');
    }

    #----------------------- USER / CLIENT SIDE -----------------------------------
    public function daftar_oprec($id)
    {
        $user = Auth::user();

        $rec = Recruitment::where('recruitments.id', $id)
        ->join('organizations', 'recruitments.rec_idormawa', '=', 'organizations.id')
        ->join('events', 'recruitments.rec_idevent', '=', 'events.id')
        ->select('recruitments.id', 'recruitments.judul', 'recruitments.kriteria_pendaftar', 'recruitments.start_date',
        'recruitments.end_date', 'recruitments.is_canceled', 'events.nama_event', 'events.kategori', 'recruitments.rec_idevent',
        'events.tahun_akademik', 'organizations.nama_ormawa', 'organizations.nama_ormawa', 'recruitments.created_at',  'recruitments.updated_at')
        ->get();
        

        $availdiv = Division::where('d_idevent', $rec[0]->rec_idevent)->get();
        // dump($rec);  
        // return($availdiv);
        return view('user/register', compact('user', 'rec', 'availdiv'));
    }

    public function store_user($id, Request $request)
    {
        $user = Auth::user();

        // return($request);

        $request->validate([
            'nama_event'=>'required',
            'id_oprec'=>'required',
            'nama_ormawa'=>'required',
            'divisi1'=>'required|integer',
            'divisi2'=>'required|integer|different:divisi1',
        ],
    
        [
            'nama_event.required'=>'Terjadi Kesalahan',
            'id_oprec.required'=>'Terjadi Kesalahan',
            'nama_ormawa.required'=>'Terjadi Kesalahan',
            'divisi1.required'=>'Kamu Belum Memilih Pilihan Divisi Pertama',
            'divisi2.required'=>'Kamu Belum Memilih Pilihan Divisi Kedua',
            'divisi1.integer'=>'Kamu Belum Memilih Pilihan Divisi Pertama',
            'divisi2.integer'=>'Kamu Belum Memilih Pilihan Divisi Kedua',
            'divisi2.different'=>'Pilihan Kedua Divisi Harus Berbeda',
        ]);

        Registrant::create([
            'divisi_1' => $request->divisi1,
            'divisi_2' => $request->divisi2,
            'reg_idrec' => $request->id_oprec,
            'reg_nim' => Auth::user()->nim,
        ]);

        return redirect('user/history')->with('status', 'Anda Berhasil Mendaftar, Good Luck!');
    }
}
