<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chairman;
use App\Models\Event;
use App\Models\Certificate;
use App\Models\Softskill;
use App\Models\Staff;
use App\Models\Division;
use App\Models\User;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chairman = Chairman::where('c_nim', Auth::id())->get(); //NIM diambil dari session auth pas login
        $pastevents = Event::where('e_idormawa', $chairman[0]->c_idormawa)
        ->where('tahun_akademik', '<', '2020/2021 Semester Genap')
        ->get(); //2020/2021 Semester Genap diambil dari tahun akademik sekarang

        $user = Auth::user();

        $certificates = Certificate::all();
        $check = 0;

        return view('certificate', compact('pastevents', 'certificates', 'check', 'user'));
    }

    public function api($id) {
        $certificate = Certificate::where('ctf_idevent', $id)->get();
        if (count($certificate)) {
            unset($certificate[0]->ctf_idevent);
            $certificate[0]->sk = url("/uploads/SK/{$certificate[0]->sk}");

            $event = Event::where('id', $id)->get();
            $certificate[0]->nama_event = $event[0]->nama_event;
            $certificate[0]->kategori = $event[0]->kategori;
            $certificate[0]->tahun_akademik = $event[0]->tahun_akademik;

            $skill = Softskill::where('ski_idcertificates', $certificate[0]->id)->get();
            $certificate[0]->softskills = $skill;

            $staff = Staff::where('s_idevent', $id)->where('status', 1)->get();

            for ($i=0; $i < count($staff); $i++) { 
                unset($staff[$i]->status);
                unset($staff[$i]->s_idevent);
                
                $divisi = Division::where('id', $staff[$i]->s_iddivisi)->get(); 

                $staff[$i]->nama_divisi = $divisi[0]->nama_divisi;

                unset($staff[$i]->s_iddivisi);
            }

            for ($i=0; $i < count($skill); $i++) { 
                unset($skill[$i]->ski_idcertificates);
            }

            $certificate[0]->members = $staff;
            return($certificate[0]);
        } else {
            return redirect('certificate');
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = Auth::user();

        $event = Event::findOrFail($id);
        // return($events);
        return view('new_certificate', compact('event', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $request->validate([
            'learning_hour'=>'required',
            'level_kegiatan'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'soft_skills'=>'required',
            'sk' => 'mimes:pdf,docx,doc|max:2048',
        ],
    
        [
            'learning_hour.required'=>'Learning Hour harus diisi',
            'level_kegiatan.required'=>'Level Kegiatan harus diisi',
            'start_date.required'=>'Tanggal Mulai harus diisi',
            'end_date.required'=>'Tanggal Selesai harus diisi',
            'soft_skills.required'=>'Minimal Satu Soft Skills harus dipilih',
            'sk.mimes'=>'Surat Keterangan harus berformat pdf, docx, atau doc',
            'sk.max'=>'Ukuran Surat Keterangan maksimal 2 MB',
        ]);
        
        $certificate = new Certificate;
        $certificate->learning_hour = $request->learning_hour;
        $certificate->level_kegiatan = $request->level_kegiatan;
        $certificate->start_date = $request->start_date;
        $certificate->end_date = $request->end_date;
        $certificate->pembimbing = $request->pembimbing;
        $certificate->ctf_idevent = $id;
        $certificate->pembimbing = $request->pembimbing;

        if ($request->hasfile('sk')) {
            $file = $request->file('sk');
            $filename = time().'.'.$file->extension();
            $file->move(public_path('uploads/SK/'), $filename);
            $certificate->sk = $filename;
        }

        $certificate->save();

        $sertif = Certificate::where('ctf_idevent', $id)->get();

        for ($j=0; $j < count($request->soft_skills); $j++) {

            $softskill = new Softskill;
            $softskill->skill = $request->soft_skills[$j];
            $softskill->ski_idcertificates = $sertif[0]->id;

            $softskill->save();
        }

        return redirect('certificate')->with('status', 'Sertifikat untuk SKPI berhasil disimpan!');;
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
