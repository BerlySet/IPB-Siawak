@extends('template.main')

@section('title', 'New Certificate')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container-md">
            <h1 class="mt-3">New Certificate</h1>
            <p>Correctly enter the information about Certificate</p>

            <div class="container-fluid">
                <div class="row align-items-start px-3 g-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="d-flex">
                                <td class="col-3"><b>Nama Kegiatan</b></td>
                                <td class="col-5">{{ $event->nama_event }}</td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-3"><b>Tahun Akademik</b></td>
                                <td class="col-5">{{ $event->tahun_akademik }}</td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-3"><b>Kategori</b></td>
                                <td class="col-5">{{ $event->kategori }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <form method="POST" action="/certificate/new/{{ $event->id }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row align-items-center g-3 ">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="learning_hour" class="col-form-label"><b>Learning Hour</b></label>
                                </div>
                                <input type="text" id="learning_hour"
                                    class="form-control @error('learning_hour') is-invalid @enderror"
                                    aria-label="Learning Hour" aria-describedby="basic-addon2" name="learning_hour">
                                <span class="input-group-text" id="basic-addon2">Jam/Semester</span>
                            </div>
                            @error('learning_hour')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="level_kegiatan" class="col-form-label"><b>Level Kegiatan</b></label>
                                </div>
                                <select class="form-select @error('level_kegiatan') is-invalid @enderror"
                                    id="level_kegiatan" name="level_kegiatan">
                                    <option selected>Choose...</option>
                                    <option>Internasional</option>
                                    <option>Nasional</option>
                                    <option>Provinsi</option>
                                    <option>Kota/Kab</option>
                                    <option>IPB</option>
                                    <option>Fakultas</option>
                                    <option>Departemen</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            @error('level_kegiatan')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
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

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="soft_skills[]" class="col-form-label"><b>Soft Skills</b></label>
                                </div>
                                <select id="soft_skills[]"
                                    class="selectpicker form-control @error('soft_skills[]') is-invalid @enderror"
                                    multiple data-live-search="true" name="soft_skills[]">
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
                        @error('soft_skills[]')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="pembimbing" class="col-form-label"><b>Nama Pembimbing</b></label>
                                </div>
                                <input type="text" id="pembimbing"
                                    class="form-control @error('pembimbing') is-invalid @enderror" name="pembimbing">
                            </div>
                        </div>
                        @error('pembimbing')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="sk" class="col-form-label"><b>Dokumen SK</b></label>
                                </div>
                                <input type="file" id="sk" class="form-control @error('sk') is-invalid @enderror"
                                    name="sk">
                            </div>
                        </div>
                        @error('sk')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row justify-content-end px-3 gap-3">
                        <a class="btn btn-danger col-1" href="/certificate" role="button">Batal</a>
                        <button type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#sertifModal">Kirim Sertifikat</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="sertifModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah anda yakin untuk mengirimkan sertifikat?</p>
                                    <p><b>Setelah ini Anda tidak dapat mengubah datanya. Mohon pastikan seluruh pengisian sudah benar.</b></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </div>
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