@extends('template.main')

@section('title', 'New Open Recruitment Form')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container">New Open Recruitment Form</h2>
            <div class="container">Isi segala ketentuan pendaftaran kepanitiaan/keanggotaan dengan teliti.</div>

            <form method="POST" action="/recruitments/create" enctype="multipart/form-data">
                @csrf
                <div class="form-group row, d-flex my-2">
                    <label for="Judul" class="col-sm-2 col-form-label"><b>Judul</b></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="judul" placeholder="e.g Recruitment 2020-2021" name="judul">
                    </div>
                </div>
                <div class="form-group row, d-flex my-2">
                    <label for="NamaEvent" class="col-sm-2 col-form-label"><b>Nama Event</b></label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="NamaEvent" name="nama_event" placeholder="Masukan Nama Event">
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
                                    <option>2021/2022 Semester Genap</option>
                                    <option>2021/2022 Semester Ganjil</option>
                                    <option>2020/2021 Semester Genap</option>
                                    <option>2020/2021 Semester Ganjil</option>
                                    <option>2019/2020 Semester Genap</option>
                                    <option>2019/2020 Semester Ganjil</option>
                                    <option>2018/2019 Semester Genap</option>
                                    <option>2018/2019 Semester Ganjil</option>
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
                                    <option>Kepengurusan</option>
                                    <option>Kepanitiaan</option>
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
                                <input type="text" class="form-control" id="kriteria" placeholder="Masukan Kriteria yang dibutuhkan" rows="2" name="kriteria_pendaftar">
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
                                    <label for="inputTanggal" class="col-form-label"><b>Tanggal Pendaftaran</b></label>
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

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="divisi[]" class="col-form-label"><b>Pilihan Divisi</b></label>
                                </div>
                                <select id="divisi[]"
                                    class="selectpicker form-control @error('divisi[]') is-invalid @enderror"
                                    multiple data-live-search="true" name="divisi[]">
                                    <option>G1 - Complex Problem Solving</option>
                                    <option>G1 - Critical Thinking</option>
                                    <option>G2 - Communication</option>
                                    <option>G2 - Creativity & Innovation</option>
                                    <option>G2 - Decision Making</option>
                                    <option>G2 - Technology Savvy</option>
                                    <option>G3 - Adaptability</option>
                                    <option>G3 - Collaboration</option>
                                    <option>G3 - Curiousity</option>
                                    <option>G3 - Persistence & Grit</option>
                                    <option>G4 - Initiative</option>
                                    <option>G4 - Integrity</option>
                                    <option>G4 - Intuitive</option>
                                    <option>G4 - Leadership</option>
                                    <option>G4 - Nationality</option>
                                    <option>G4 - Social & Cultural Awareness</option>
                                </select>
                            </div>
                        </div>
                        @error('divisi[]')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                <div style = "position:relative; left: 350px;">
                    <a href="/recruitments" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        <div class="b-example-divider"></div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

@section('user', $user->nama )