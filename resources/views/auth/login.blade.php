
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevanix-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}"> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        .form-group{
            margin-bottom: 20px;
        }
        .register{
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            padding: 6%;
            padding-top: 60px;
        }
        .register-left{
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }
        .register-left input{
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }
        .register-right{
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }
        .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }
        .register .register-form{
            padding-top: 10%;
            margin-top: 10%;
            width: 100%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }
        .register .nav-tabs .nav-link{
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register .nav-tabs .nav-link:hover{
            border: none;
        }
        .register .nav-tabs .nav-link.active{
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="register">
    <div class="row">

        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input type="submit" name="" value="Login/Signup"/><br/>
        </div>
        <div class="col-md-9 register-right">
            {{-- <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Login</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Signup</button>

                </div>
            </nav> --}}
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><h3 class="register-heading">Login Form</h3>
                    <div class="row register-form">
                        <form method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf

                            
                            <div class="form-group col-12">
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-12">

                                <input id="password-field" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span toggle="#password-field"
                                      class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                             
                                

                                    <a class="btn btn-link" href="{{ url('/register') }}">
                                       Not Have an Account ?  Signup
                                    </a>
                            
                            </div>

                            <div class="form-group col-md-1 col-6 m-auto">
                                <button type="submit" class="form-control btn btn-primary m-auto btn-sm submit px-3">{{ __('Login') }}
                                </button>
                            </div>
                          
                          

                        </form>
                    </div>
                </div>
           

            </div>
            <!-- <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="signup" role="tabpanel" aria-labelledby="home-tab">

                </div>

                <div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="login-tab">


                </div>
            </div> -->
        </div>
    </div>

</div>

</body>
</html>












{{--<section class="ftco-section">--}}
{{--    <div class="container">--}}

{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-6 col-lg-4">--}}
{{--                <div class="login-wrap p-0">--}}

{{--                    <form method="POST" action="{{ route('login') }}" class="signin-form">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group">--}}
{{--                            <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                            @error('email')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}

{{--                                <input id="password-field" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}
{{--                                <span toggle="#password-field"--}}
{{--                                class="fa fa-fw fa-eye field-icon toggle-password"></span>--}}
{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                <label class="form-check-label" for="remember">--}}
{{--                                    {{ __('Remember Me') }}--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <button type="submit" class="form-control btn btn-primary submit px-3">{{ __('Login') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link text-white" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}

{{--                    </form>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--@endsection--}}
