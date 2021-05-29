<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>SKPI</title>
</head>

<body>
    <div class=".d-flex mx-5 my-3">
        <h2>Surat Keterangan Pendamping Ijazah</h2>
        <p>Mengisi satu form untuk semua, batas pengisian maksimal 1 bulan setelah semester selesai.</p>
        <h3 class="mt-3">Completed Events</h3>
        <table class="table my-3">
            <thead class="table table-info">
              <tr class=".d-flex">
                <th class="col-1">No.</th>
                <th class="col-4">Title</th>
                <th class="col-3">Academic Year</th>
                <th class="col-2">Kategory</th>
                <th class="col-2">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($pastevents as $pe)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td class="col-4">{{ $pe->nama_event }}</td>
                <td class="col-3">{{ $pe->tahun_akademik }}</td>
                <td class="col-2">{{ $pe->kategori }}</td>
                <td class="col-2">
                    <a class="btn btn-danger btn-sm" href="certificate/new/{{ $pe->id }}" role="button">Isi SKPI</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>