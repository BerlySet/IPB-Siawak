<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">

    <title>Your Profile</title>
</head>

<body>
    <div class=".d-flex mx-5 my-3">
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
                                        <p style="margin-bottom: 2px;">Ketua {{ $organization[0]->nama_ormawa }}</p>
                                        <p class="mb-2" style="margin-bottom: 0px;">{{ $chairman[0]->tahun_jabatan }} - {{ $chairman[0]->tahun_jabatan+1 }}</p>
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
                    <h3 class="my-3">Your Organization</h3>
                    <table class="table table-borderless">
                        <tbody>
                            <tr class=".d-flex">
                                <td class="col-4"><b>Nama</b></td>
                                <td class="col-8">{{ $organization[0]->nama_ormawa }}</td>
                            </tr>
                            <tr>
                                <td><b>Periode</b></td>
                                <td>{{ $chairman[0]->tahun_jabatan }}</td>
                            </tr>
                            <tr>
                                <td><b>Deskripsi</b></td>
                                <td>{{ $organization[0]->deskripsi_ormawa }}</td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>{{ $organization[0]->email_ormawa }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

    </div>
</body>

</html>