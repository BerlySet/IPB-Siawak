@extends('template.main_user')

@section('title', 'Recruitment Sedang Dibuka')
{{-- <link href="{{ asset('css/profile.css') }}" rel="stylesheet"> --}}

@section('container')
<div class="overflow-auto w-100">
    <div class="row .d-flex mx-5 my-3">
        <h2>Perekrutan yang Sedang Dibuka</h2>
        @foreach ($recruitment as $rec)
        @php
            $isregist = 0;
        @endphp
        <div class="card text-center m-2" style="width: 31%">
            <div class="card-header">
                {{ $rec->kategori }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $rec->judul }}</h5>
                <p class="card-text">{{ $rec->nama_ormawa }}</p>
                @foreach ($registrant as $r)
                    @if ($r->reg_idrec == $rec->id)
                        @php
                        $isregist = 1;
                        @endphp
                    @endif
                @endforeach
                @if ($isregist == 1)
                    <a href="#" class="btn btn-secondary">Telah Mendaftar</a>
                @else
                    <a href="./recruitments/{{$rec->id}}" class="btn btn-primary">Daftar</a>
                @endif
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