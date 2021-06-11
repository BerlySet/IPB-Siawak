@extends('template.main_user')

@section('title', 'Dashboard')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">

@section('container')
 
@endsection

@section('user', $user->nama)