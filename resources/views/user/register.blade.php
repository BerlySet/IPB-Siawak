@extends('template.main_user')

@section('title', 'Register')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container-md">
            <h1 class="mt-3">Mendaftar {{ $rec[0]->nama_event }}</h1>
            <p>Pilih 2 divisi yang diinginkan lalu klik daftar. Semudah itu!</p>

            <div class="container-fluid">
                <div class="row align-items-start px-3 g-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="d-flex">
                                <td class="col-3"><b>Nama Kegiatan</b></td>
                                <td class="col-5">{{ $rec[0]->nama_event }}</td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-3"><b>Penyelenggara</b></td>
                                <td class="col-5">{{ $rec[0]->nama_ormawa }}</td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-3"><b>Tahun Akademik</b></td>
                                <td class="col-5">{{ $rec[0]->tahun_akademik }}</td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-3"><b>Kategori</b></td>
                                <td class="col-5">{{ $rec[0]->kategori }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <form method="POST" action="{{ url('/user/recruitments/'.$rec[0]->id.'/register') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <input type="hidden" id="nama_event" name="nama_event" value="{{ $rec[0]->nama_event }}">
                    </div>

                    <div class="form-group">
                        <input type="hidden" id="id_oprec" name="id_oprec" value="{{ $rec[0]->id }}">
                    </div>

                    <div class="form-group">
                        <input type="hidden" id="nama_ormawa" name="nama_ormawa" value="{{ $rec[0]->nama_ormawa }}">
                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="divisi1" class="col-form-label"><b>Pilihan Divisi 1</b></label>
                                </div>
                                <select class="form-select @error('divisi1') is-invalid @enderror" id="divisi1"
                                    name="divisi1">
                                    <option selected>Choose...</option>
                                    @foreach ($availdiv as $ad)
                                    <option value="{{ $ad->id }}">{{ $ad->nama_divisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('divisi1')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="divisi2" class="col-form-label"><b>Pilihan Divisi 2</b></label>
                                </div>
                                <select class="form-select @error('divisi2') is-invalid @enderror" id="divisi2"
                                    name="divisi2">
                                    <option selected>Choose...</option>
                                    @foreach ($availdiv as $ad)
                                    <option value="{{ $ad->id }}">{{ $ad->nama_divisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('divisi2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-end px-3 gap-3">
                        <a class="btn btn-danger col-1" href="/user/recruitments" role="button">Batal</a>
                        <button type="submit" class="btn btn-primary col-2">Daftar Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

@section('user', $user->nama )