@extends('template.main')

@section('title', 'Members')

@section('container')
<div class="overflow-auto w-100">
  <div class=".d-flex mx-5 my-3">
    <div class="container">
      <h2 class="container">IT Today 2021</h2>
      <div class="container">Acara Yang Sedang Berlangsung</div>
      <table class="table">
        <thead class="table-info">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
            <th scope="col">Posisi</th>
            <th scope="col">Divisi</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($staff as $st)
        </tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $st->nama }}</td>
        <td>
          <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
              aria-expanded="false">
              Aktif
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Tidak Aktif</a></li>
            </ul>
          </div>
        </td>
        <td>
          <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
              aria-expanded="false">
              Staff
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Ketua Divisi</a></li>
              <li><a class="dropdown-item" href="#">Wakil Ketua Divisi</a></li>
            </ul>
          </div>
        </td>
        <td>
          <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
              aria-expanded="false">
              Liaison Officer
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">HRD</a></li>
              <li><a class="dropdown-item" href="#">Eksternal</a></li>
              <li><a class="dropdown-item" href="#">Kestari</a></li>
            </ul>
          </div>
        </td>
        <tr>
          @endforeach
        </tbody>
      </table>
      <div class="row justify-content-end px-3 gap-3">
        <button type="button" class="btn btn-danger col-1">Batal</button>
        <button type="button" class="btn btn-primary col-1">Simpan</button>
      </div>
    </div>

    <div class="b-example-divider"></div>
  </div>
</div>
@endsection

@section('user', $user->nama )