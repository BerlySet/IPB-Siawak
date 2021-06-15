@extends('template.main')

@section('title', 'Applicant Detail')

@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container">Applicant Detail</h2>
            <div class="container">Data lengkap pelamar</div>

            <table class="table my-3">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Pilihan Satu</th>
                            <th scope="col">Pilihan Dua</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cristmas Anggario</td>
                            <td>G64180222</td>
                            <td>Divis Eksternal</td>
                            <td>Divis HRD</td>
                            <td>
                            <a class="btn btn-success btn-sm"><i class="fa fa-check-square-o" style="font-size:24px;color:white"></i></a>
                            <a class="btn btn-danger btn-sm"><i class='fa fa-exclamation-circle' style='font-size:24px;color:white'></i></a>
                            <a href="/detail" class="btn btn-primary btn-sm"><i class='fa fa-search' style='font-size:24px;color:white'></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Haya Busa</td>
                            <td>G64170213</td>
                            <td>Divis HRD</td>
                            <td>Divis Eksternal</td>
                            <td>
                            <a class="btn btn-success btn-sm"><i class="fa fa-check-square-o" style="font-size:24px;color:white"></i></a>
                            <a class="btn btn-danger btn-sm"><i class='fa fa-exclamation-circle' style='font-size:24px;color:white'></i></a>
                            <a class="btn btn-primary btn-sm"><i class='fa fa-search' style='font-size:24px;color:white'></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ling Wanwan</td>
                            <td>G64180013</td>
                            <td>Divis Bongkar</td>
                            <td>Divis Pasang</td>
                            <td>
                            <a class="btn btn-success btn-sm"><i class="fa fa-check-square-o" style="font-size:24px;color:white"></i></a>
                            <a class="btn btn-danger btn-sm"><i class='fa fa-exclamation-circle' style='font-size:24px;color:white'></i></a>
                            <a class="btn btn-primary btn-sm"><i class='fa fa-search' style='font-size:24px;color:white'></i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="container" style = "position:relative; left: 250px;">Tentukanlah penerimaan dengan teliti</div>
                
                <a class=".d-flex mx-3 my-3" href="/recruitments"> Kembali </a>
                
        <div class="b-example-divider"></div>
    </div>
</div>
@endsection

@section('user', $user->nama )