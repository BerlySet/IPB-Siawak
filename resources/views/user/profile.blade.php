@extends('template.main_user')

@section('title', 'Profile')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex flex-column mx-5 my-3">
        <div class="container my-3">
            <h2>Profile</h2>

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div id="content" class="content content-full-width">
                            <!-- begin profile -->
                            <div class="profile">
                                <div class="profile-header rounded-top">
                                    <!-- BEGIN profile-header-cover -->
                                    <div class="profile-header-cover"></div>
                                    <!-- END profile-header-cover -->
                                    <!-- BEGIN profile-header-content -->
                                    <div class="profile-header-content">
                                        <!-- BEGIN profile-header-img -->
                                        <div class="profile-header-img">
                                            <img src="{{ asset('images/profilepicture.png') }}" alt="">
                                        </div>
                                        <!-- END profile-header-img -->
                                        <!-- BEGIN profile-header-info -->
                                        <div class="profile-header-info">
                                            <h4 class="m-t-10 mb-3 mt-3">{{ $user->nama }}</h4>
                                            <p style="margin-bottom: 2px;">{{ $user->nim }}</p>
                                            @if ($user->jenis_kelamin == 'Laki-Laki')
                                            <p class="mb-2" style="margin-bottom: 0px;">
                                                Mahasiswa Departemen {{ $user->departemen }}
                                            </p>
                                            @else
                                            <p class="mb-2" style="margin-bottom: 0px;">
                                                Mahasiswi Departemen {{ $user->departemen }}
                                            </p>
                                            @endif
                                            
                                        </div>
                                        <!-- END profile-header-info -->
                                    </div>
                                    <!-- END profile-header-content -->
                                </div>
                            </div>
                            <!-- end profile -->
                        </div>
                        <!-- end profile-content -->
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-3">
            <div class="row align-items-start">
                <div class="col">
                    <div class="container-sm">
                        <h3 class="my-3">Your Profile</h3>
                        <table class="table table-borderless">
                            <tbody>
                                <tr class=".d-flex">
                                    <td class="col-4"><b>Jenis Kelamin</b></td>
                                    @if ($user->jenis_kelamin == 0)
                                    <td class="col-8">Laki-Laki</td>
                                    @else
                                    <td class="col-8">Perempuan</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td><b>Tempat Lahir</b></td>
                                    <td>{{ $user->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal Lahir</b></td>
                                    <td>{{ $user->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td><b>Tahun Masuk</b></td>
                                    <td>{{ $user->tahun_masuk }}</td>
                                </tr>
                                <tr>
                                    <td><b>Agama</b></td>
                                    <td>{{ $user->agama }}</td>
                                </tr>
                                <tr>
                                    <td><b>Departemen</b></td>
                                    <td>{{ $user->departemen }}</td>
                                </tr>
                                <tr>
                                    <td><b>Fakultas</b></td>
                                    <td>{{ $user->fakultas }}</td>
                                </tr>
                                <tr>
                                    <td><b>No Hp</b></td>
                                    <td>{{ $user->no_handphone }}</td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="container-sm">
                        <h3 class="my-3">Active Position</h3>
                        @if (count($staff) == 0)
                            <p>Kamu Belum Aktif Di Organisasi Manapun!</p>
                            <a class="btn btn-primary" href="./recruitments" role="button">Cari Open Recruitments</a>
                        @else
                            @foreach ($staff as $st)
                            <p><b>{{ $st->jabatan }} {{ $st->nama_divisi }}</b>
                                <br>
                                {{ $st->nama_event }} - {{ $st->nama_ormawa }}
                            </p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('user', $user->nama )