@extends('template.main_user')

@section('title', 'History Pendaftaran')
{{-- <link href="{{ asset('css/profile.css') }}" rel="stylesheet"> --}}

@section('container')
<div class="overflow-auto w-100">
  <div class=".d-flex mx-5 my-3">
    <h2>Your Registration History</h2>
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    <div class="table-responsive-md">
      <table class="table my-4">
        <thead class="table table-info">
          <tr class=".d-flex">
            <th class="col-1">No.</th>
            <th class="col-3">Nama Event</th>
            <th class="col-2">Divisi Pertama</th>
            <th class="col-2">Divisi Kedua</th>
            <th class="col-2">Tanggal</th>
            <th class="col-2">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($history as $hist)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $hist->nama_event }}</td>
            <td>{{ $hist->divisi_1 }}</td>
            <td>{{ $hist->divisi_2 }}</td>
            <td>{{ $hist->created_at }}</td>

            @if ($hist->status===NULL)
            <td><span class="badge bg-info text-dark">Diproses</span></td>
            @elseif ($hist->status==1)
            <td><span class="badge bg-success text-dark">Diterima</span></td>
            @else
            <td><span class="badge bg-danger text-dark">Ditolak</span></td>
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