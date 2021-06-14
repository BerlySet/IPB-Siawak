@extends('template.main')

@section('title', 'New Open Recruitment Form')

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container">New Open Recruitment Form</h2>
            <div class="container">Isi segala ketentuan pendaftaran kepanitiaan/keanggotaan dengan teliti.</div>

            <form>
                <div class="form-group row">
                    <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="judul" placeholder="e.g Staff Recruitment 2020-2021">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="NamaEvent" class="col-sm-2 col-form-label">Nama Event</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="NamaEvent" placeholder="Masukan Nama Event">
                    </div>
                </div>
            </form>

                <div style = "position:relative; left: 350px;">
                    <a href="/" class="btn btn-danger">Cancel</a>
                </div>
                <div style = "position:relative; left: 450px;">
                    <a href="/" class="btn btn-primary">Submit</a>
                </div>
        <div class="b-example-divider"></div>
    </div>
</div>
@endsection

@section('user', $user->nama )