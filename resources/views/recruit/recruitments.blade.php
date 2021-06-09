@extends('template.main')

@section('title', 'Reacruitments')

@section('container')
<div>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
       <h2>ini halaman recruitments.</h2>
       <h3>Judul Oprec 1: {{$recruitment[0]->judul}} </h3>
    </body>
</html>

</div>
@endsection

@section('user', $user->nama )