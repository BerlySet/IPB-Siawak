@extends('template.main_user')

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
                                    <a href="/user/recruitments">
                                        <svg class="align-middle" width="90" height="90"><use xlink:href="#speedometer2"/></svg>
                                    </div>
                                    </a>
                                    <p>Lihat perekrutan kepengurusan dan kepanitiaan yang sedang dibuka </p>
                            </div>    
                            <div class="col text-center">
                                    <div class="features-icons-icon">
                                    <a href="/user/history">
                                        <svg class="align-middle" width="90" height="90"><use xlink:href="#toggles2"/></svg>
                                    </a>
                                    </div>
                                    <p>Lihat history perekrutan yang telah diikuti </p>
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