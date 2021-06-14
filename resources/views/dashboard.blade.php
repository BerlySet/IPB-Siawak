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
                            <div class="col">
                            Lihat perekrutan kepengurusan dan kepanitiaan yang sedang dibuka 
                            </div>
                            <div class="col">
                            Lihat history perekrutan yang telah diikuti 
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