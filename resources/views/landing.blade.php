<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
</head>
<body>

<div class="sidebar-right" id="sidebar">
    <button class="btn btn-primary btn-lg btn-circle" onclick="sidebarClose()"> <i class="fa fa-times"></i> </button>
    <a href="/dashboard">Dashboard</a>
    <a href="/login" class="active">Login</a>
</div>

<div class="bg">

    <nav class="navbar justify-content-between">
        <div class="logo">
            <a href="#">
                <img src="{{ asset('images/logo.png') }}" alt="" srcset="" height="50px">
            </a>
        </div>
        <div class="menu">
            <a href="/dashboard">Dashboard</a>
            <a href="/login" class="active">Login</a>
            <button class="btn btn-primary btn-lg icon" onclick="sidebarOpen()"><i class="fa fa-bars"></i></button>
        </div>
    </nav>

    <br>

    <div class="container-fluid">

        <div class="d-sm-flex justify-content-around content">

            <div class="content-left">
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1 class="text-blue"><b>IPB</b></h1>
                <h1>SIAWAK</h1>
                <div class="description">
                    <p>Sistem Informasi Anggota Ormawa dan Kepanitiaan IPB</p>
                </div>
                <a href="#" class="btn btn-primary btn-lg">Mulai Sekarang</a>
            </div>

            <div class="image1">
                <img src="{{ asset('images/image1.png') }}" alt="" srcset="" height="450px">
            </div>

        </div>

    </div>

</div>

</body>
<script>
    function sidebarOpen(){
        document.getElementById("sidebar").landing.transform = "translateX(0px)";
    }
    function sidebarClose(){
        document.getElementById("sidebar").landing.transform = "translateX(300px)";
    }
</script>
</html>
