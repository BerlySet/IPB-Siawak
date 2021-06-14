@extends('template.main')

@section('title', 'New Open Recruitment Form')

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container">New Open Recruitment Form</h2>
            <div class="container">Isi segala ketentuan pendaftaran kepanitiaan/keanggotaan dengan teliti.</div>

            <form class=".d-flex mx-5 my-3">
                <div class="form-group row, d-flex my-2">
                    <label for="Judul" class="col-sm-2 col-form-label"><b>Judul</b></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="judul" placeholder="e.g Recruitment 2020-2021">
                    </div>
                </div>
                <div class="form-group row, d-flex my-2">
                    <label for="NamaEvent" class="col-sm-2 col-form-label"><b>Nama Event</b></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="NamaEvent" placeholder="Masukan Nama Event">
                    </div>
                </div>

                    <div class="form-group">
                        <div class="d-flex my-2">
                            <div class="input-group mb-1">
                                <div class="col-sm-2">
                                    <label for="tahun_akademik" class="col-sm-1 col-form-label"><b>Tahun Akademik</b></label>
                                </div>
                                <select class="form-select @error('tahun_akademik') is-invalid @enderror"
                                    id="tahun_akademik" name="tahun_akademik">
                                    <option selected>Choose...</option>
                                    <option>Semester Genap, Tahun Akademik 2022/2021</option>
                                    <option>Semester Ganjil, Tahun Akademik 2022/2021</option>
                                    <option>Semester Genap, Tahun Akademik 2021/2020</option>
                                    <option>Semester Ganjil, Tahun Akademik 2021/2020</option>
                                    <option>Semester Genap, Tahun Akademik 2020/2019</option>
                                    <option>Semester Ganjil, Tahun Akademik 2020/2019</option>
                                    <option>Semester Genap, Tahun Akademik 2019/2018</option>
                                    <option>Semester Ganjil, Tahun Akademik 2019/20</option>
                                </select>
                            </div>
                            @error('tahun_akademik')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="d-flex my-2">
                            <div class="input-group mb-1">
                                <div class="col-sm-2">
                                    <label for="kategori" class="col-sm-1 col-form-label"><b>Kategori</b></label>
                                </div>
                                <select class="form-select @error('kategori') is-invalid @enderror"
                                    id="kategori" name="kategori">
                                    <option selected>Choose...</option>
                                    <option>Pimpinan</option>
                                    <option>Staff</option>
                                </select>
                            </div>
                            @error('kategori')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="d-flex my-2">
                            <div class="input-group mb-1">
                                <div class="col-sm-2">
                                    <label for="kriteria_pendaftar" class="col-sm-1 col-form-label"><b>Kriteria Pendaftar</b></label>
                                </div>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="NamaEvent" placeholder="Masukan Kriteria yang dibutuhkan" rows="2">
                                </div>
                            </div>
                            @error('kriteria_pendaftar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="d-flex my-2">
                            <div class="input-group mb-1">
                                <div class="col-sm-2">
                                    <label for="inputTanggal" class="col-form-label"><b>Tanggal Kegiatan</b></label>
                                </div>
                                <div class="col">
                                    <input type="date" id="start_date"
                                        class="form-control @error('start_date') is-invalid @enderror"
                                        name="start_date">
                                </div>
                                <p class="col-form-label px-4"><b>s.d</b></p>
                                <div class="col">
                                    <input type="date" id="end_date"
                                        class="form-control @error('end_date') is-invalid @enderror" name="end_date">
                                </div>
                            </div>
                        </div>
                        @error('start_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @error('end_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

            </form>

                <div style = "position:relative; left: 350px;">
                    <a href="/recruitments" class="btn btn-danger">Cancel</a>
                    <a href="/" class="btn btn-primary">Submit</a>
                </div>
        <div class="b-example-divider"></div>
    </div>
</div>
@endsection

@section('user', $user->nama )