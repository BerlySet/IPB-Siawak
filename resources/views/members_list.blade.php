@extends('template.main')

@section('title', 'Members')

@section('container')
<div class="overflow-auto w-100">
  <div class=".d-flex mx-5 my-3">
    <div class="container">
      <h2 class="container">{{ $event[0]->nama_event }}</h2>
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif
      <div class="container">Seluruh Pengurus
      </div>

      <div class="row justify-content-end px-3 gap-3">
        <a class="btn btn-primary btn-sm col-1 m-1" href="/members/edit/{{ $id }}" role="button">Edit</a>
      </div>
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
          @if ($st->status == 0)
          <td>Tidak Aktif</td>
          @else
          <td>Aktif</td>
          @endif
          <td>{{ $st->jabatan }}</td>
          <td>{{ $st->nama_divisi }}</td>
          <tr>
            @endforeach

        </tbody>
      </table>
    </div>

    <div class="b-example-divider"></div>
  </div>
</div>
@endsection

@section('user', $user->nama )