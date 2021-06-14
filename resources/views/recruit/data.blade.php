@extends('template.main')

@section('title', 'Applicant Detail')

@section('container')
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
                            <button type="button" class="btn btn-success btn-sm">Terima</button>
                            <button type="button" class="btn btn-danger btn-sm">Tolak</button>
                            <button type="button" class="btn btn-primary btn-sm">Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Haya Busa</td>
                            <td>G64170213</td>
                            <td>Divis HRD</td>
                            <td>Divis Eksternal</td>
                            <td>
                            <button type="button" class="btn btn-success btn-sm">Terima</button>
                            <button type="button" class="btn btn-danger btn-sm">Tolak</button>
                            <button type="button" class="btn btn-primary btn-sm">Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ling Wanwan</td>
                            <td>G64180013</td>
                            <td>Divis Bongkar</td>
                            <td>Divis Pasang</td>
                            <td>
                            <button type="button" class="btn btn-success btn-sm">Terima</button>
                            <button type="button" class="btn btn-danger btn-sm">Tolak</button>
                            <button type="button" class="btn btn-primary btn-sm">Detail</button>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <div style = "position:relative; left: 350px;">
                    <a href="#" class="btn btn-danger">Tolak</a>
                    <a href="#" class="btn btn-success">Terima</a>
                </div>

        <div class="b-example-divider"></div>
    </div>
</div>
@endsection

@section('user', $user->nama )