@extends('template.main')

@section('title', 'Reacruitments')

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container">Recruitments</h2>
            <div class="container">Data pembukaan pendaftaran yang telah dibuat </div>
                <a href="/" class="btn btn-primary">New Open Reacruitment</a>
             </div>
        <div class="b-example-divider"></div>
    </div>
</div>
@endsection

@section('user', $user->nama )