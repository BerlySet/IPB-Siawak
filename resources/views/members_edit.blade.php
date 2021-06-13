@extends('template.main')

@section('title', 'Members')

@section('container')
<div class="overflow-auto w-100">
  <div class=".d-flex mx-5 my-3">
    <div class="container">
      <h2 class="container">{{ $event[0]->nama_event }}</h2>
      <div class="container mb-3">Seluruh Pengurus</div>

      <form method="POST" action="#" enctype="multipart/form-data">
        @csrf
        <table class="table align-middle">
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
            <div class="form-group">
              <input type="hidden" id="id_event" name="id_event" value="{{ $id }}">
            </div>
            <div class="form-group">
              <input type="hidden" id="count_members" name="count_members" value="{{ count($staff) }}">
            </div>
            @foreach ($staff as $st)
            </tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $st->nama }}

              <div class="form-group">
                <input type="hidden" id="id[]" name="id[]" value="{{ $st->id }}">
              </div>
            </td>
            {{-- hidden id --}}

            <td>
              <div class="form-group">
                <select class="form-select @error('isactive') is-invalid @enderror" id="isactive[]" name="isactive[]">
                  @if ($st->status == 0)
                  <option selected>Tidak Aktif</option>
                  @else
                  <option selected>Aktif</option>
                  @endif
                  @if ($st->status == 0)
                  <option>Aktif</option>
                  @else
                  <option>Tidak Aktif</option>
                  @endif
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-select @error('posisi') is-invalid @enderror" id="posisi[]" name="posisi[]">
                  <option selected>{{ $st->jabatan }}</option>
                  @foreach ($jabatan as $j)
                  @if ($j != $st->jabatan)
                  <option>{{ $j }}</option>
                  @endif
                  @endforeach
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-select @error('divisi') is-invalid @enderror" id="divisi[]" name="divisi[]">
                  <option selected>{{ $st->nama_divisi }}</option>
                  @foreach ($availdiv as $div)
                  @if ($div->nama_divisi != $st->nama_divisi)
                  <option>{{ $div->nama_divisi }}</option>
                  @endif
                  @endforeach
                </select>
              </div>
            </td>
            <tr>
              @endforeach

          </tbody>
        </table>
        <div class="row justify-content-end px-3 gap-3">
          <a class="btn btn-danger col-1" href="/members/list/{{$id}}" role="button">Batal</a>
          <button type="button" class="btn btn-primary col-1" data-bs-toggle="modal" data-bs-target="#membersEditModal">Simpan</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="membersEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Anda yakin ingin mengubah data?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="b-example-divider"></div>
  </div>
</div>
@endsection

@section('user', $user->nama )