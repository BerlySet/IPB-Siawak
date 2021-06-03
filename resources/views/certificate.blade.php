@extends('template.main')

@section('title', 'Certificate')
{{-- <link href="{{ asset('css/profile.css') }}" rel="stylesheet"> --}}

@section('container')
<div class="overflow-auto w-100">
  <div class=".d-flex mx-5 my-3">
    <h2>Surat Keterangan Pendamping Ijazah</h2>
    <p>Mengisi satu form untuk semua, batas pengisian maksimal 1 bulan setelah semester selesai.</p>
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    <h3 class="mt-3">Completed Events</h3>
    <div class="table-responsive-md">
    <table class="table my-3">
      <thead class="table table-info">
        <tr class=".d-flex">
          <th class="col-1">No.</th>
          <th class="col-4">Title</th>
          <th class="col-3">Academic Year</th>
          <th class="col-2">Kategory</th>
          <th class="col-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pastevents as $pe)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td class="col-4">{{ $pe->nama_event }}</td>
          <td class="col-3">{{ $pe->tahun_akademik }}</td>
          <td class="col-2">{{ $pe->kategori }}</td>
          <td class="col-2">
            @foreach ($certificates as $certificate)
            @if ($certificate->ctf_idevent == $pe->id)
              @php
              $check = 1;
              @endphp
            @else
              @php
              $check = 0;
              @endphp
            @endif
            @endforeach

            @if ($check == 1)
            <a class="btn btn-primary btn-sm" href="/certificate/api/{{ $pe->id }}" role="button">Link API</a>
            @else
            <a class="btn btn-danger btn-sm" href="/certificate/new/{{ $pe->id }}" role="button">Isi SKPI</a>
            @endif

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection

@section('user', $user->nama )