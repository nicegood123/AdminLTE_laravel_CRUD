<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD Practice 1</title>

    {{-- Fonts --}}
    @include('partials.fonts')


    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets//dist/css/adminlte.min.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-9">
                <div class="card px-3 pt-3 pb-5 shadow-lg">
                    <h4 class="text-center text-dark">Login</h4>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="text-right mt-0 mb-2">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            Login
                        </button>
                    </form>

                    <div class="d-flex justify-content-center mt-3">
                        Don't have an account yet? &nbsp;
                        <a href="{{ route('register') }}">Register here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Scripts --}}
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets//plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
