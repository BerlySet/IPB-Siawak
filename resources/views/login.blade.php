<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Login - IPB Siawak</title>
        <link rel="icon" href="{!! asset('images/image1.png') !!}"/>
        <link
            rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link
            rel="stylesheet" href="{{ asset('css/login.css') }}">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>

    <body class="bg-primary">
    <div class="bg">
        <div class="kotaka">
            <div class="logo"></div>
            <div class="kotak">
                <div class="foto"></div>
                    <div class="teksb">
                        <center><h3>Sistem Informasi Anggota Ormawa dan Kepanitiaan IPB</h3></center>
                    </div>
                <div class="scale">
                    <div id="layoutAuthentication">
                        <div id="layoutAuthentication_content">
                            <main>
                                <div class="container">
                                    <div class="row justify-content-right">
                                        <div class="col-lg-5">
                                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                            {{-- Error Alert --}}
                                            
                                            @if(session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{session('error')}}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                                
                                            @endif
                                            <div class="card-header">
                                                <h2 class="text-center font-weight-bold my-4">LOGIN SIAWAK</h2>
                                            </div>
                                                
                                            <div class="card-body">
                                                <form action="{{url('proses_login')}}" method="POST" id="logForm">
                                                {{ csrf_field() }}  
                                                <div class="form-group">
                                                    @error('login_gagal')
                                                    {{--<span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span> --}}
                                                        
                                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                            {{--<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                                                <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                        </div>
                                                    @enderror
                                                    <label class="medium mb-1" for="inputEmailAddress"><b>Email<b></label>
                                                    <input
                                                        class="form-control py-4"
                                                        id="inputEmailAddress"
                                                        name="email"
                                                        type="text"
                                                        placeholder="Masukkan Email"/>
                                                        
                                                        @if($errors->has('email'))
                                                        <span style="color:red" class="error">{{ $errors->first('email') }}</span>
                                                        @endif
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="medium mb-1" for="inputPassword"><b>Password</b></label>
                                                    <input
                                                        class="form-control py-4"
                                                        id="inputPassword"
                                                        type="password"
                                                        name="password"
                                                        placeholder="Masukkan Password"/>
                                                        
                                                        @if($errors->has('password'))
                                                        <span style="color:red" class="error">{{ $errors->first('password') }}</span>
                                                        @endif
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                                        <label class="custom-control-label" for="rememberPasswordCheck"><b>Ingat Saya?</b></label>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    {{-- <a class="small" href="#">Forgot Password?</a> --}}
                                                    <button class="btn btn-primary btn-block" type="submit"><b>Login</b></button>
                                                </div>
                                                
                                                </form>
                                            </div>
                                            
                                            <div class="card-footer text-center">
                                                <div class="small">
                                                    {{-- <a href="{{url('register')}}">Belum Punya Akun? Daftar!</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
    </body>
</html>