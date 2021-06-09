@extends('template.main_user')

@section('title', 'Recruitment Sedang Dibuka')
{{-- <link href="{{ asset('css/profile.css') }}" rel="stylesheet"> --}}

@section('container')
<div class="overflow-auto w-100">
    <div class="row .d-flex mx-5 my-3">
        <h2>Perekrutan yang Sedang Dibuka</h2>
        @foreach ($recruitment as $rec)
        <div class="card text-center m-2" style="width: 31%">
            <div class="card-header">
                {{ $rec->kategori }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $rec->judul }}</h5>
                <p class="card-text">{{ $rec->nama_ormawa }}</p>
                <a href="./register/{{$rec->id}}" class="btn btn-success">Daftar</a>
            </div>
            <div class="card-footer text-muted">
                Tanggal Ditutup : {{ $rec->end_date }}
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection

@section('user', $user->nama )