@extends('template.main')

@section('title', 'Dashboard')

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
        <h2 class="container">Dashboard</h2>
            <div class="container-fluid">
                <div class="row">
                    <h5>Selamat datang, <?php echo $user->nama; ?></h5>
                    <p>Silahkan pilih menu.</p>
                    <div class="card">
                        <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                    <div class="features-icons-icon text-center">
                                    <a href="/recruitments">
                                        <svg class="align-middle" width="90" height="90"><use xlink:href="#speedometer2"/></svg>
                                    </a>
                                    </div>
                                    <p>Lihat atau tambahkan pendaftaran kepengurusan atau acara.</p>
                            </div>    
                            <div class="col text-center">
                                    <div class="features-icons-icon">
                                    <a href="/members">
                                        <svg class="align-middle" width="90" height="90"><use xlink:href="#table"/></svg>
                                    </a>
                                    </div>
                                    <p>Lihat atau edit posisi, status dan divisi pengurus.</p>
                            </div>
                            <div class="col text-center">
                                    <div class="features-icons-icon">
                                    <a href="/certificate">
                                        <svg class="align-middle" width="90" height="90"><use xlink:href="#grid"/></svg>
                                    </a>
                                    </div>
                                    <p>Lihat atau isi SKPI dari kepengurusan atau acara.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('user', $user->nama )