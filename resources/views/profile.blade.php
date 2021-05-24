<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="mt-3">Profile</h1>

    <div class="container-sm bg-secondary">
        <div class="row align-items-center">
            <div class="col">
                <img src="{{asset("images/profilepicture.png")}}" class="img-thumbnail" alt="Profile Picture">
            </div>
            <div class="col">
                <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <td><h2> {{ $user[0]->nama }} </h2></td>
                      </tr>
                      <tr>
                        <td>Ketua {{ $organization[0]->nama_ormawa }}</td>
                      </tr>
                      <tr>
                        <td>{{ $chairman[0]->tahun_jabatan }}-{{ (int)$chairman[0]->tahun_jabatan+1 }}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>



    </div>


        <div class="container">
            <div class="row align-items-start">
              <div class="col">
                <div class="container-sm">
                    <h3>Your Profile</h3>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>   
                                <td>{{ $user[0]->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td><b>Tempat Lahir</b></td>
                                <td>{{ $user[0]->tempat_lahir}}</td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir</b></td>
                                <td>{{ $user[0]->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td><b>Tahun Masuk</b></td>
                                <td>{{ $user[0]->tahun_masuk }}</td>
                            </tr>
                            <tr>
                                <td><b>Agama</b></td>
                                <td>{{ $user[0]->agama }}</td>
                            </tr>
                            <tr>
                                <td><b>Departemen</b></td>
                                <td>{{ $user[0]->departemen }}</td>
                            </tr>
                            <tr>
                                <td><b>Fakultas</b></td>
                                <td>{{ $user[0]->fakultas }}</td>
                            </tr>
                            <tr>
                                <td><b>No Hp</b></td>
                                <td>{{ $user[0]->no_handphone }}</td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>{{ $user[0]->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
              <div class="col">
                <div class="container-sm">
                    <h3>Your Organization</h3>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td><b>Nama</b></td>
                                <td>{{ $organization[0]->nama_ormawa }}</td>
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
                                <td>belum ada atribut email pada class organization</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>

        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
