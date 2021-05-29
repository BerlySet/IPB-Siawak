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
        <div class="col-8">
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

                <form method="POST" action="#">
                    @csrf
                    <div class="form-group">
                        <div class="row align-items-center g-3 ">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="inputLH" class="col-form-label"><b>Learning Hour</b></label>
                                </div>
                                <input type="text" id="inputLH" class="form-control" aria-label="Learning Hour"
                                    aria-describedby="basic-addon2" name="learninghour">
                                <span class="input-group-text" id="basic-addon2">Jam/Semester</span>
                            </div>
                        </div>
                        @error('learninghour')
                        <div id="validationLearningHourFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="inputLevel" class="col-form-label"><b>Level Kegiatan</b></label>
                                </div>
                                <select class="form-select" id="inputLevel" name="levelkegiatan">
                                    <option selected>Choose...</option>
                                    <option value="1">Internasional</option>
                                    <option value="2">Nasional</option>
                                    <option value="3">Provinsi</option>
                                    <option value="4">Kota/Kab</option>
                                    <option value="5">IPB</option>
                                    <option value="6">Fakultas</option>
                                    <option value="7">Departemen</option>
                                    <option value="8">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        @error('levelkegiatan')
                        <div id="validationLevelFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="inputTanggal" class="col-form-label"><b>Tanggal Kegiatan</b></label>
                                </div>
                                <div class="col">
                                    <input type="date" id="startdate" class="form-control" name="startdate">
                                </div>
                                <p class="col-form-label px-4"><b>s.d</b></p>
                                <div class="col">
                                    <input type="date" id="enddate" class="form-control" name="enddate">
                                </div>
                            </div>
                        </div>
                        @error('startdate')
                        <div id="validationStartDateFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        @error('enddate')
                        <div id="validationEndDateFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="inputSkills" class="col-form-label"><b>Soft Skills</b></label>
                                </div>
                                <select class="selectpicker form-control" multiple data-live-search="true" name="softskills">
                                    <option value="1">G1 - Complex Problem Solving</option>
                                    <option value="2">G1 - Critical Thinking</option>
                                    <option value="3">G2 - Communication</option>
                                    <option value="4">G2 - Creativity & Innovation</option>
                                    <option value="5">G2 - Decision Making</option>
                                    <option value="6">G2 - Technology Savvy</option>
                                    <option value="7">G3 - Adaptability</option>
                                    <option value="8">G3 - Collaboration</option>
                                    <option value="9">G3 - Curiousity</option>
                                    <option value="10">G3 - Persistence & Grit</option>
                                    <option value="11">G4 - Initiative</option>
                                    <option value="12">G4 - Integrity</option>
                                    <option value="13">G4 - Intuitive</option>
                                    <option value="14">G4 - Leadership</option>
                                    <option value="15">G4 - Nationality</option>
                                    <option value="16">G4 - Social & Cultural Awareness</option>
                                </select>
                            </div>
                        </div>
                        @error('softskills')
                        <div id="validationSoftSkillsFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="inputPembimbing" class="col-form-label"><b>Nama Pembimbing</b></label>
                                </div>
                                <input type="text" id="inputPembimbing" class="form-control" name="pembimbing">
                            </div>
                        </div>
                        @error('pembimbing')
                        <div id="validationPembimbingFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row g-3 align-items-center">
                            <div class="input-group mb-3">
                                <div class="col-3 px-3">
                                    <label for="inputSK" class="col-form-label"><b>Dokumen SK</b></label>
                                </div>
                                <input type="file" id="inputSK" class="form-control" name="SK">
                            </div>
                        </div>
                        @error('SK')
                        <div id="validationSKFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="row justify-content-end px-3 gap-3">
                        <a class="btn btn-danger col-2" href="/certificate" role="button">Batal</a>
                        <button type="submit" class="btn btn-primary col-3">Kirim Sertifikat</button>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>