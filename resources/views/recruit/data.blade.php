@extends('template.main')

@section('title', 'Applicant Detail')

@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container">Applicant Detail</h2>
            <div class="container">Data lengkap pelamar</div>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <table class="table align-middle my-3">
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

                @if (count($registrant) == 0)
                <tbody>
                    <tr>
                        <td colspan="6">
                            <img src="{{ asset('images/empty.png') }}" class="rounded mx-auto mt-5 d-block" height="200"
                                width="200" alt="tidak ada pengurus">
                            <p class="text-center m-3">Belum ada pendaftar untuk saat ini.</p>
                        </td>
                    </tr>
                </tbody>
                @else
                <tbody>
                    @foreach ($registrant as $reg)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $reg->nama }}</td>
                        <td>{{ $reg->nim }}</td>
                        <td>{{ $reg->nmdivisi_1 }}</td>
                        <td>{{ $reg->nmdivisi_2 }}</td>
                        <td>
                            <button href="#" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#terimaModal" data-bs-whatever="{{ $loop->iteration }}"><i
                                    class="fa fa-check-square-o" style="font-size:24px;color:white"></i></button>
                            <button href="#" type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#tolakModal" data-bs-whatever="{{ $loop->iteration }}"><i
                                    class='fa fa-exclamation-circle' style='font-size:24px;color:white'></i></button>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#detailModal" data-bs-whatever="{{ $loop->iteration }}"><i
                                    class='fa fa-search' style='font-size:24px;color:white'></i></button>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
                @endif
            </table>

            <!-- Modal -->
            <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Detail Registrant</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container my-3">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <div class="container-sm">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr class=".d-flex">
                                                        <td class="col-4"><b>Nama</b></td>
                                                        <td class="modal-Nama"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>NIM</b></td>
                                                        <td class="modal-NIM"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Jenis Kelamin</b></td>
                                                        <td class="modal-JK"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>TTL</b></td>
                                                        <td class="modal-TTL"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Departemen</b></td>
                                                        <td class="modal-Dept"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="container-sm">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr class=".d-flex">
                                                        <td class="col-4"><b>Fakultas</b></td>
                                                        <td class="modal-Fakultas"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>No Telp</b></td>
                                                        <td class="modal-NoHP"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Email</b></td>
                                                        <td class="modal-Email"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Divisi Pertama</b></td>
                                                        <td class="modal-Div1"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Divisi Kedua</b></td>
                                                        <td class="modal-Div2"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            {{-- <button type="button" class="btn btn-success" data-bs-target="#terimaModal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">Terima</button> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="tolakModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">TOLAK PELAMAR</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Anda yakin ingin <b>menolak</b> pelamar ini?
                        </div>
                        <div class="modal-footer">
                            <form method="POST" action="" class="form-tolak" id="PostTolak"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input class="tolakModal_idreg" type="hidden" id="id_registrant"
                                        name="id_registrant" value="">
                                </div>
                                <div class="form-group">
                                    <input class="tolakModal_iddiv1" type="hidden" id="id_divisi_1" name="id_divisi_1"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" id="id_oprec" name="id_oprec" value={{$id}}>
                                </div>
                                <button type="submit" class="btn btn-success">Ya</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="terimaModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">TERIMA PELAMAR</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Anda yakin ingin <b>menerima</b> pelamar ini?
                        </div>
                        <div class="modal-footer">
                            <form method="POST" action="" class="form-terima" id="PostTerima"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input class="terimaModal_idreg" type="hidden" id="id_registrant"
                                        name="id_registrant" value="">
                                </div>
                                <div class="form-group">
                                    <input class="terimaModal_iddiv1" type="hidden" id="id_divisi_1" name="id_divisi_1"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" id="id_oprec" name="id_oprec" value={{$id}}>
                                </div>
                                <button type="submit" class="btn btn-success">Ya</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">Tentukanlah penerimaan dengan teliti</div>
            <a class="container" href="javascript:history.back()"> Kembali </a>
            <div class="b-example-divider"></div>
        </div>
    </div>

    <script>
        var detailModal = document.getElementById('detailModal')
        detailModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var id = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        
        var data = [
        @foreach ($registrant as $reg)
            [ "{{$reg->nama}}", "{{$reg->nim}}" , "{{$reg->jenis_kelamin}}" , "{{$reg->tempat_lahir}}" , "{{$reg->tanggal_lahir}}" , "{{$reg->departemen}}" , "{{$reg->fakultas}}" , "{{$reg->no_handphone}}" , "{{$reg->email}}" , "{{$reg->nmdivisi_1}}" , "{{$reg->nmdivisi_2}}"], 
        @endforeach
        ];

        // Update the modal's content.
        var modalNama = detailModal.querySelector('.modal-Nama')
        var modalNIM = detailModal.querySelector('.modal-NIM')
        var modalJK = detailModal.querySelector('.modal-JK')
        var modalTTL = detailModal.querySelector('.modal-TTL')
        var modalDept = detailModal.querySelector('.modal-Dept')
        var modalFakultas = detailModal.querySelector('.modal-Fakultas')
        var modalNoHP = detailModal.querySelector('.modal-NoHP')
        var modalEmail = detailModal.querySelector('.modal-Email')
        var modalDiv1 = detailModal.querySelector('.modal-Div1')
        var modalDiv2 = detailModal.querySelector('.modal-Div2')

        modalNama.textContent = data[id-1][0]
        modalNIM.textContent = data[id-1][1]
        if (data[id-1][2] == 0) {
            modalJK.textContent = 'Laki-Laki'
        } else {
            modalJK.textContent = 'Perempuan'
        }
        modalTTL.textContent = data[id-1][3] + ', ' + data[id-1][4]
        modalDept.textContent = data[id-1][5]
        modalFakultas.textContent = data[id-1][6]
        modalNoHP.textContent = data[id-1][7]
        modalEmail.textContent = data[id-1][8]
        modalDiv1.textContent = data[id-1][9]
        modalDiv2.textContent = data[id-1][10]

        })
    </script>

    <script>
        // JS buat terima
        var terimaModal = document.getElementById('terimaModal')
        terimaModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var id = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        
        var data = [
        @foreach ($registrant as $reg)
            ["{{$reg->id}}", "{{$reg->divisi_1}}" ], 
        @endforeach
        ];

        // Update the modal's content.
        var idreg = terimaModal.querySelector('.terimaModal_idreg')
        var iddiv1 = terimaModal.querySelector('.terimaModal_iddiv1')
        var form_action = terimaModal.querySelector('form.form-terima')

        idreg.value = data[id-1][0]
        iddiv1.value = data[id-1][1]
        form_action.action = '/recruitments/data/'+id+'/terima'
    }

    )
    </script>

    <script>
        // JS buat Tolak
        var tolakModal = document.getElementById('tolakModal')
        tolakModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var id = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.

        var data = [
        @foreach ($registrant as $reg)
            ["{{$reg->id}}", "{{$reg->divisi_1}}" ], 
        @endforeach
        ];

        // Update the modal's content.
        var idreg = tolakModal.querySelector('.tolakModal_idreg')
        var iddiv1 = tolakModal.querySelector('.tolakModal_iddiv1')
        var form_action = tolakModal.querySelector('form.form-tolak')

        idreg.value = data[id-1][0]
        iddiv1.value = data[id-1][1]
        form_action.action = '/recruitments/data/'+id+'/tolak'
    }

    )
    </script>

    @endsection

    @section('user', $user->nama )