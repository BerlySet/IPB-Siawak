@extends('template.main')

@section('title', 'Reacruitments')

@section('container')
<div class="overflow-auto w-100">
    <div class=".d-flex mx-5 my-3">
        <div class="container">
            <h2 class="container">Recruitments</h2>
            <div class="container">Data pembukaan pendaftaran yang telah dibuat </div>
                <div style = "position:relative; left: 650px;">
                    <a href="/create" class="btn btn-primary">New Open Reacruitment</a>
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
                        <tr>
                            <td>1</td>
                            <td>Panitia MPKMB 59</td>
                            <td>16-02-2022</td>
                            <td>16-03-2022</td>
                            <td>
                            <button type="button" class="btn btn-success btn-sm">Completed</button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Oprec Staff Seruni 2022</td>
                            <td>03-07-2022</td>
                            <td>17-07-2022</td>
                            <td>
                            <button type="button" class="btn btn-warning btn-sm">Upcoming</button>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Oprec Pimpinan Genus 2022</td>
                            <td>09-04-2022</td>
                            <td>22-04-2022</td>
                            <td>
                            <button type="button" class="btn btn-primary btn-sm">Running</button>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Oprec Staff OMI 2020</td>
                            <td>13-11-2020</td>
                            <td>26-11-2020</td>
                            <td>
                            <button type="button" class="btn btn-danger btn-sm">Canceled</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

        <div class="b-example-divider"></div>
    </div>
</div>
@endsection

@section('user', $user->nama )