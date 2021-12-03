<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Olian is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, admin theme, bootstrap 4, responsive, sass support, ui kits, crm, ecommerce">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>login</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{URL::asset('assets/frontassets/images/favicon.ico')}}">
    <!-- Start css -->
    <link href="{{URL::asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/frontassets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/frontassets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<style type="text/css">
    .row.justify-content-center {
    margin-top: 102px;
}
</style>
<body class="vertical-layout">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>

                                    <p class="mb-0 mt-3 btn btn-warning">Don't have a account? <a href="{{route('register')}}" style="color: #fff">Sign up</a></p>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <script src="{{URL::asset('assets/front/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/modernizr.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/detect.js')}}"></script>
    <script src="{{URL::asset('assets/front/js/jquery.slimscroll.js')}}"></script>
</body>


</html>

























