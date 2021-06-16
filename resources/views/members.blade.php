@extends('template.main')

@section('title', 'Members')

@section('container')
<div class="overflow-auto w-100">
  <div class=".d-flex mx-5 my-3">
    <div class="container">
      <h2 class="container"><b>Anggota</b></h2>
      <div class="container">Acara Yang Sedang Berlangsung</div>
      <table class="table my-3">
        <thead class="table-info">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Acara</th>
            <th scope="col">Tahun Akademik</th>
            <th scope="col">Kategori</th>
            <th scope="col">Structure</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($runningevent as $re)

          </tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $re->nama_event }}</td>
          <td>{{ $re->tahun_akademik }}</td>
          <td>{{ $re->kategori }}</td>
          <td>
            <a href="/members/list/{{ $re->id }}" class="btn btn-primary btn-sm">Detail</a>
          </td>

          @endforeach

          <tr>
        </tbody>
      </table>
    </div>

    <div class="b-example-divider"></div>

  </div>
</div>
@endsection

@section('user', $user->nama )