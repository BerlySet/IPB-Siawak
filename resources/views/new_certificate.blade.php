<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <title>New Certificate</title>
</head>

<body>
    <div class="row .d-flex mx-5 my-3">
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
                                <select class="form-select @error('level_kegiatan') is-invalid @enderror" id="level_kegiatan" name="level_kegiatan">
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
                                <select id="soft_skills[]" class="selectpicker form-control @error('soft_skills[]') is-invalid @enderror"
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
                        <button type="submit" class="btn btn-primary col-2">Kirim Sertifikat</button>
                    </div>
                </form>
            </div>
        </div>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
        </script>


        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>