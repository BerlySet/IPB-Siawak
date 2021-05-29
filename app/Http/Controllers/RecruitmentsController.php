<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;
use App\Models\Chairman;
use App\Models\Event;
use App\Models\Division;
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
        return view('recruit/recruitments', compact('recruitment'));
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

        return($recruitment);
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

        return($recruitment);
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

        return($recruitment);
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

        return($recruitment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recruit/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        Event::create([
            'nama_event' => $request->nama_event,
            'kategori' => $request->kategori,
            'e_idormawa' => $chairman[0]->c_idormawa,
        ]);
        
        for ($i=0; $i < length($divisi); $i++) { 
            // $div = Division::where('nama_divisi', $divisi->nama_divisi)->get();
            // if (!count($div)) {
            
            Division::create([
                'nama_divisi' => $request->nama_divisi,
                'd_idevent' => $request->tahun_akademik,
            ]);
            // }
        }

        Recruitment::create([
            'judul' => $request->judul,
            'tahun_akademik' => $request->tahun_akademik,
            'kriteria_pendaftar' => $request->kriteria_pendaftar,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'rec_idormawa' => $chairman[0]->c_idormawa,
            // 'rec_idevent' => id event yang baru di create
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recruitment = Recruitment::findOrFail($id);
        // return($recruitment);
        return view('recruit/#', compact('recruitment'));
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
        return redirect('recruit/recruitments')->with('status', 'Data Berhasil Diubah!');;
        
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
        return redirect('recruit/recruitments')->with('status', 'Data Berhasil Dihapus!');;
    }
}
