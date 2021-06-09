@extends('template.main')

@section('title', 'Members')

@section('container')
<div class="container">
<h2 class="container">IT Today 2021</h2>
  <div class="container">Acara Yang Sedang Berlangsung 
  </div>
  <div class="row justify-content-end px-3 gap-3">
    <a class="btn btn-primary btn-sm col-1" href="/members/edit" role="button">Edit</a>
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
      </tr>
      <th scope="row">1</th>
      <td>Cristmas Anggario</td>
      <td>Active</td>
      <td>Staff</td>
      <td>Liaison Officer</td>
      <tr>
    </tbody>
</table>
</div>
  
  <div class="b-example-divider"></div>
@endsection

@section('user', $user->nama )