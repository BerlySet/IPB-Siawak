@extends('template.main')

@section('title', 'Reacruitments')

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container">Recruitments</h2>
            <div class="container">Data pembukaan pendaftaran yang telah dibuat </div>

            <div class="row align-items-center">
                <div class="col align-self-end">
                    <nav class="navbar navbar-expand navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link" href="/recruitments">All</a>
                                    <a class="nav-link" href="/recruitments/completed">Completed</a>
                                    <a class="nav-link active" aria-current="page" href="/recruitments/running">Running</a>
                                    <a class="nav-link" href="/recruitments/upcoming">Upcoming</a>
                                    <a class="nav-link" href="/recruitments/canceled">Canceled</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-auto">
                    <a href="/create" class="btn btn-primary">New Open Recruitment</a>
                </div>

            </div>

            <table class="table">
                <thead class="table-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Acara</th>
                        <th scope="col">Waktu Pembukaan</th>
                        <th scope="col">Waktu Penutupan</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($recruitment as $rec)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rec->judul }}</td>
                        <td>{{ $rec->start_date }}</td>
                        <td>{{ $rec->end_date }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Running</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="b-example-divider"></div>
        </div>
    </div>
    @endsection

    @section('user', $user->nama )