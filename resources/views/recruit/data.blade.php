@extends('template.main')

@section('title', 'Applicant Detail')

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container">Applicant Detail</h2>
            <div class="container">Data lengkap pelamar</div>

            
                <div style = "position:relative; left: 350px;">
                    <a href="#" class="btn btn-danger">Tolak</a>
                    <a href="#" class="btn btn-success">Terima</a>
                </div>

        <div class="b-example-divider"></div>
    </div>
</div>
@endsection

@section('user', $user->nama )