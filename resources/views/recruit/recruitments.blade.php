@extends('template.main')

@section('title', 'Recruitments')

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container"><b>Recruitments</b></h2>
            <div class="container">Data pembukaan pendaftaran yang telah dibuat </div>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="row align-items-center">
                <div class="col align-self-end">
                    <nav class="navbar navbar-expand navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link active" aria-current="page" href="/recruitments"><b>All</b></a>
                                    <a class="nav-link" href="/recruitments/completed">Completed</a>
                                    <a class="nav-link" href="/recruitments/running">Running</a>
                                    <a class="nav-link" href="/recruitments/upcoming">Upcoming</a>
                                    <a class="nav-link" href="/recruitments/canceled">Canceled</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-auto">
                    <a href="{{ url('/recruitments/create') }}" class="btn btn-primary">New Open Recruitment</a>
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

                        @switch($rec->status)
                        @case('Completed')
                        <td>
                            <a href="{{ url('/recruitments/data/'.$rec->id) }}"
                                class="btn btn-success btn-sm">Completed</a>
                        </td>
                        @break
                        @case('Upcoming')
                        <td>
                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#upcomingModal">Upcoming</a>
                        </td>
                        @break

                        @case('Running')
                        <td>
                            <a href="{{ url('/recruitments/data/'.$rec->id) }}"
                                class="btn btn-primary btn-sm">Running</a>
                        </td>
                        @break

                        @default
                        <td>
                            <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#cancelModal">Canceled</a>
                        </td>
                        @endswitch
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Modal -->
            <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Anda telah membatalkan perekrutan ini!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="upcomingModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Pendaftar bisa dilihat ketika perekrutan telah dimulai!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-example-divider"></div>
        </div>
    </div>
    @endsection

    @section('user', $user->nama )