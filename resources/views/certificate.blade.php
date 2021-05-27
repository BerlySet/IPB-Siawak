<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>New Certificate</title>
  </head>
  <body>
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">New Certificate</h1>
        <p>Correctly enter the information about Certificate</p>
            <form method="POST" action="#">
                @csrf
                <div class="form-group">
                    <div class="row g-3 align-items-center">
                        <div class="input-group mb-3">
                            <div class="col-auto px-3">
                                <label for="inputLH" class="col-form-label">Learning Hour</label>
                            </div>
                                <input type="text" id="inputLH" class="form-control" aria-label="Learning Hour" aria-describedby="basic-addon2" name="learninghour">
                                <span class="input-group-text" id="basic-addon2">Jam/ Semester</span>
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
                            <div class="col-auto px-3">
                                <label for="inputLevel" class="col-form-label">Level Kegiatan</label>
                            </div>
                                <select class="form-select" id="inputLevel" name="levelkegiatan">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
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
                            <div class="col-auto px-3">
                                <label for="inputTanggal" class="col-form-label">Tanggal Kegiatan</label>
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
                            <div class="col-auto px-3">
                                <label for="inputSkills" class="col-form-label">Soft Skills</label>
                            </div>
                                <input type="text" id="inputSkills" class="form-control" name="softskills">
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
                            <div class="col-auto px-3">
                                <label for="inputPembimbing" class="col-form-label">Nama Pembimbing</label>
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
                            <div class="col-auto px-3">
                                <label for="inputSK" class="col-form-label">Dokumen SK</label>
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

                <div class="row justify-content-end gap-3">
                    <button type="button" class="btn btn-danger col-2">Batal</button>
                    <button type="submit" class="btn btn-primary col-2">Kirim Sertifikat</button>
                </div>
            </form>
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