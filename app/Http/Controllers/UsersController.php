<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organization;
use App\Models\Chairman;
use App\Models\Recruitment;
use App\Models\Staff;
use App\Models\Event;
use App\Models\Registrant;
use App\Models\Division;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user();
        $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login
        $organization = Organization::where('id', $chairman[0]->c_idormawa)->get(); 
        
        // return($chairman);
        // return($organization);
        // return($user);
        return view('profile', compact('user','organization','chairman'));
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function members()
    {
        $user = Auth::user();
        $chairman = Chairman::where('c_nim', Auth::id())->get(); //NIM diambil dari session auth pas login
        $runningevent = Event::where('e_idormawa', $chairman[0]->c_idormawa)
        ->where('tahun_akademik', '>=', '2020/2021 Semester Genap')
        ->orderBy('tahun_akademik', 'desc')
        ->get(); //2020/2021 Semester Genap diambil dari tahun akademik sekarang
        // return($runningevent);
        return view('members', compact('user', 'runningevent'));
    }

    public function members_edit($id)
    {
        $user = Auth::user();
        $staff = Staff::where('s_idevent', $id)
        ->join('users', 'staff.s_nim', '=', 'users.nim')
        ->join('divisions', 'staff.s_iddivisi', '=', 'divisions.id')
        ->select('staff.id', 'staff.jabatan', 'staff.tahun_jabatan', 'staff.status',
        'users.nim', 'users.nama', 'divisions.nama_divisi')
        ->orderBy('staff.status', 'desc')
        ->orderBy('divisions.nama_divisi', 'asc')
        ->orderBy('staff.jabatan', 'asc')
        ->get();

        $availdiv = Division::where('d_idevent', $id)->get();

        $event = Event::where('id', $id)->get();

        $jabatan[0] = 'Ketua';
        $jabatan[1] = 'Wakil Ketua';
        $jabatan[2] = 'Sekretaris';
        $jabatan[3] = 'Bendahara';
        $jabatan[4] = 'Staff';

        // dump($jabatan);
        return view('members_edit', compact('user', 'staff', 'id', 'availdiv', 'event', 'jabatan'));
    }

    public function members_list($id)
    {
        $user = Auth::user();
        $staff = Staff::where('s_idevent', $id)
        ->join('users', 'staff.s_nim', '=', 'users.nim')
        ->join('divisions', 'staff.s_iddivisi', '=', 'divisions.id')
        ->select('staff.id', 'staff.jabatan', 'staff.tahun_jabatan', 'staff.status',
        'users.nim', 'users.nama', 'divisions.nama_divisi')
        ->orderBy('staff.status', 'desc')
        ->orderBy('divisions.nama_divisi', 'asc')
        ->orderBy('staff.jabatan', 'asc')
        ->get();

        $event = Event::where('id', $id)->get();
        // return($staff);
        return view('members_list', compact('user', 'staff', 'id', 'event'));
    }
    
    //------------------------------ USER MAHASISWA ---------------------------------------------------
    public function dashboard_user()
    {
        $user = Auth::user();
        return view('dashboard_user' , compact('user'));
    }

    public function profile_user()
    {
        $user = Auth::user();
        $staff = Staff::where('s_nim', $user->nim)
                ->join('events', 'staff.s_idevent', '=', 'events.id')
                ->join('divisions', 'staff.s_iddivisi', '=', 'divisions.id') 
                ->join('organizations', 'events.e_idormawa', '=', 'organizations.id') 
                ->get();

        // return($staff);
        return view('user.profile', compact('user','staff'));
    }

    public function history_user()
    {
        $user = Auth::user();
        $history = Registrant::where('reg_nim', $user->nim)
                    ->join('recruitments', 'registrants.reg_idrec', '=', 'recruitments.id') 
                    ->join('events', 'recruitments.rec_idevent', '=', 'events.id') 
                    ->join('organizations', 'recruitments.rec_idormawa', '=', 'organizations.id') 
                    ->select('registrants.id', 'events.nama_event', 'events.kategori', 'events.tahun_akademik',
                    'registrants.divisi_1', 'registrants.divisi_2', 'registrants.status', 'registrants.created_at', 'registrants.updated_at', 'organizations.nama_ormawa')
                    ->orderBy('registrants.created_at', 'asc')
                    ->get();

        for ($i=0; $i < count($history); $i++) { 
            $div1 = Division::where('id', $history[$i]->divisi_1)->get();
            $div2 = Division::where('id', $history[$i]->divisi_2)->get();
            $history[$i]->divisi_1 = $div1[0]->nama_divisi;
            $history[$i]->divisi_2 = $div2[0]->nama_divisi;
        }
        // return($history);
        return view('user.history', compact('user', 'history'));
    }

    public function recruitments_user()
    {
        $user = Auth::user();
        
        $datenow = Carbon::now();
        $datestring = $datenow->toDateString();
        $currentdate = date('Y-m-d', strtotime($datestring));

        $recruitment = Recruitment::where('start_date','<=', $currentdate)
                        ->where('end_date','>=', $currentdate)
                        ->where('is_canceled', '!=', true)
                        ->join('events', 'recruitments.rec_idevent', '=', 'events.id')
                        ->join('organizations', 'events.e_idormawa', '=', 'organizations.id')
                        ->select('recruitments.id', 'recruitments.judul', 'recruitments.kriteria_pendaftar', 'recruitments.start_date',
                                'recruitments.end_date', 'recruitments.is_canceled', 'events.nama_event', 'events.kategori',
                                'events.tahun_akademik', 'organizations.nama_ormawa', 'organizations.nama_ormawa', 'recruitments.created_at',  'recruitments.updated_at',
                                )
                        ->orderBy('recruitments.end_date', 'asc')
                        ->get();

        $registrant = Registrant::where('reg_nim', Auth::user()->nim)->get();
        $isregist = 0;
        // return($registrant);
        return view('user.recruitments', compact('user', 'recruitment', 'registrant', 'isregist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return($request);

        for ($i=0; $i < $request->count_members; $i++) {

            $div = Division::where('d_idevent', $request->id_event)
            ->where('nama_divisi', $request->divisi[$i])->get();

            // dump($div);

            if ($request->isactive[$i] == 'Tidak Aktif') {
                $status = 0;
            } else {
                $status = 1;
            }

            Staff::where('id', $request->id[$i])
                ->update([
                    'jabatan' => $request->posisi[$i],
                    'status' => $status,
                    's_iddivisi' => $div[0]->id,
                ]);
        }

        return redirect()->route('members_list', ['members' => $request->id_event])->with('status', 'Data Berhasil Diubah!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
