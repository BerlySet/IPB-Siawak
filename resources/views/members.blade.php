@extends('template.main')

@section('title', 'Members')

@section('container')
<div class="container">
  <h2 class="container">Anggota</h2>
  <div class="container">Acara Yang Sedang Berlangsung</div>
  <table class="table">
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
      </tr>
      <th scope="row">1</th>
      <td>IT Today 2021</td>
      <td>2020/2021 Semester Genap</td>
      <td>Kepanitiaan</td>
      <td>
        <a href="" class="badge badge-success bg-primary">Edit</a>
      </td>
      
      <tr>
    </tbody>
  </table>
  </div>
  
  <div class="b-example-divider"></div>
@endsection

@section('user', $user->nama )