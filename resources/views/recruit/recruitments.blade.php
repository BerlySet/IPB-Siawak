@extends('template.main')

@section('title', 'Reacruitments')

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container">Recruitments</h2>
            <div class="container">Data pembukaan pendaftaran yang telah dibuat </div>
            <div style="position:relative; left: 650px;">
                <a href="/create" class="btn btn-primary">New Open Recruitment</a>
            </div>

            <table class="table my-3">
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
                            <button type="button" class="btn btn-success btn-sm">Completed</button>
                        </td>
                        @break
                        @case('Upcoming')
                        <td>
                            <button type="button" class="btn btn-warning btn-sm">Upcoming</button>
                        </td>
                        @break

                        @case('Running')
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">Running</button>
                        </td>
                        @break

                        @default
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">Canceled</button>
                        </td>
                        @endswitch
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="b-example-divider"></div>
        </div>
    </div>
    @endsection

    @section('user', $user->nama )