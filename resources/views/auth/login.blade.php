@extends('layouts.app')


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="http://simbyone.com/wp-content/uploads/2014/04/3455e6f65c33232a060c28829a49b1cb.png">
  <title>Live</title>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="_css/Icomoon/style.css" rel="stylesheet" type="text/css" />
  <link href="_css/main.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="_scripts/jquery-2.0.2.min.js"></script>
  <script type="text/javascript" src="_scripts/main.js"></script>

  <style>
  #loading{
   background-color: #e74c3c;
   height: 100%;
   width: 100%;
   position: fixed;
   z-index: 1;
   margin-top: 0px;
   top: 0px;
 }
 #loading-center{
   width: 100%;
   height: 100%;
   position: relative;
 }
 #loading-center-absolute {
   position: absolute;
   left: 50%;
   top: 50%;
   height: 100px;
   width: 100px;
   margin-top: -50px;
   margin-left: -50px;

 }
 .object{
   width: 25px;
   height: 25px;
   background-color: #FFF;
   margin-right: 50px;
   float: left;
   margin-bottom: 50px;

 }
 .object:nth-child(2n+0) {
   margin-right: 0px;

 }


 #object_one {
   -webkit-animation: object_one 2s infinite;
   animation: object_one 2s infinite;
 }
 #object_two {
   -webkit-animation: object_two 2s infinite;
   animation: object_two 2s infinite;
 }
 #object_three {
   -webkit-animation: object_three 2s infinite;
   animation: object_three 2s infinite;
 }
 #object_four {
   -webkit-animation: object_four 2s infinite;
   animation: object_four 2s infinite;
 }



 @-webkit-keyframes object_one {
  25% { -webkit-transform: translate(75px,0) rotate(-90deg) scale(0.5); }
  50% { -webkit-transform: translate(75px,75px) rotate(-180deg); }
  75% { -webkit-transform:  translate(0,75px) rotate(-270deg) scale(0.5); }
  100% { -webkit-transform: rotate(-360deg); }
}

@keyframes object_one {
  25% { 
    transform: translate(75px,0) rotate(-90deg) scale(0.5);
    -webkit-transform: translate(75px,0) rotate(-90deg) scale(0.5);
  } 
  50% { 
    transform: translate(75px,75px) rotate(-180deg);
    -webkit-transform: translate(75px,75px) rotate(-180deg);
  } 
  75% { 
    transform: translate(0,75px) rotate(-270deg) scale(0.5);
    -webkit-transform: translate(0,75px) rotate(-270deg) scale(0.5);
  } 
  100% { 
    transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
  }
}


@-webkit-keyframes object_two {
  25% { -webkit-transform: translate(0,75px) rotate(-90deg) scale(0.5); }
  50% { -webkit-transform: translate(-75px,75px) rotate(-180deg); }
  75% { -webkit-transform:  translate(-75px,0) rotate(-270deg) scale(0.5); }
  100% { -webkit-transform: rotate(-360deg); }
}

@keyframes object_two {
  25% { 
    transform: translate(0,75px) rotate(-90deg) scale(0.5); 
    -webkit-transform: translate(0,75px) rotate(-90deg) scale(0.5); 
  } 
  50% { 
    transform: translate(-75px,75px) rotate(-180deg);
    -webkit-transform: translate(-75px,75px) rotate(-180deg);
  } 
  75% { 
    transform: translate(-75px,0) rotate(-270deg) scale(0.5);
    -webkit-transform: translate(-75px,0) rotate(-270deg) scale(0.5);
  } 
  100% { 
    transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
  }
}

@-webkit-keyframes object_three {
  25% { -webkit-transform: translate(0,-75px)  rotate(-90deg) scale(0.5); }
  50% { -webkit-transform: translate(75px,-75px) rotate(-180deg); }
  75% { -webkit-transform:  translate(75px,0) rotate(-270deg) scale(0.5); }
  100% { -webkit-transform: rotate(-360deg); }
}

@keyframes object_three {
  25% { 
    transform: translate(0,-75px)  rotate(-90deg) scale(0.5);
    -webkit-transform: translate(0,-75px)  rotate(-90deg) scale(0.5);
  } 
  50% { 
    transform: translate(75px,-75px) rotate(-180deg);
    -webkit-transform: translate(75px,-75px) rotate(-180deg);
  } 
  75% { 
    transform:  translate(75px,0) rotate(-270deg) scale(0.5);
    -webkit-transform: translate(75px,0) rotate(-270deg) scale(0.5);
  } 
  100% { 
    transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
  }
}


@-webkit-keyframes object_four {
  25% { -webkit-transform: translate(-75px,0)  rotate(-90deg) scale(0.5); }
  50% { -webkit-transform: translate(-75px,-75px) rotate(-180deg); }
  75% { -webkit-transform:  translate(0,-75px) rotate(-270deg) scale(0.5); }
  100% { -webkit-transform: rotate(-360deg); }
}

@keyframes object_four {
  25% { 
    transform: translate(-75px,0)  rotate(-90deg) scale(0.5); 
    -webkit-transform: translate(-75px,0)  rotate(-90deg) scale(0.5); 
  } 
  50% { 
    transform: translate(-75px,-75px) rotate(-180deg);
    -webkit-transform: translate(-75px,-75px) rotate(-180deg);
  } 
  75% { 
    transform: translate(0,-75px) rotate(-270deg) scale(0.5);
    -webkit-transform: translate(0,-75px) rotate(-270deg) scale(0.5);
  } 
  100% { 
    transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
  }
}


</style>
</head>
<body>
  <div id="loading">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <div class="object" id="object_one"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_four"></div>
      </div>
    </div>

  </div>


@section('content')
<div class="container" style="display: none;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" value="viewer@view.live" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" value="asfhkakbv%4dsajh_#" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button id="submit" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $( "#submit" ).click();
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

  <div id="header">
    <div id="header-left">

      <div id="header-left-icon"><a href="http://simbyone.com/30-css-page-preload-animations/"><i class="fa fa-angle-left"></i></a></div>
      <div id="header-left-text"><a href="http://simbyone.com/30-css-page-preload-animations/">30 CSS Page Preload Animations</a></div>
    </div>

    <div id="header-right">
      <div id="header-right-icon"><a href="http://simbyone.com/css-page-preload-animations/css-page-preload-animations.zip"><i class="fa fa-cloud-download"></i></a></div>
      <div id="header-right-text"><a href="http://simbyone.com/css-page-preload-animations/css-page-preload-animations.zip">Download Source</a></div>
    </div>
  </div>

  <div id="wrapper">
    <div id="wrapper-center">
      <div class="wrapper-center-title">Square Animations</div>
      <div class="wrapper-center-content">
        <a href="demo1.html">Demo 1</a>
        <a href="demo2.html">Demo 2</a>
        <a href="demo3.html">Demo 3</a>
        <a href="demo4.html">Demo 4</a>
        <a href="demo5.html">Demo 5</a>
        <a href="demo6.html">Demo 6</a>
        <a href="demo7.html">Demo 7</a>
        <a href="demo8.html">Demo 8</a>
        <a href="demo9.html">Demo 9</a>
        <a href="demo10.html">Demo 10</a>
      </div>
      <div class="wrapper-center-title">Round Animations</div>
      <div class="wrapper-center-content">
        <a href="demo11.html">Demo 11</a>
        <a href="demo12.html">Demo 12</a>
        <a href="demo13.html">Demo 13</a>
        <a href="demo14.html">Demo 14</a>
        <a href="demo15.html">Demo 15</a>
        <a href="demo16.html">Demo 16</a>
        <a href="demo17.html">Demo 17</a>
        <a href="demo18.html">Demo 18</a>
        <a href="demo19.html">Demo 19</a>
        <a href="demo20.html">Demo 20</a>
      </div>
      <div class="wrapper-center-title">Various Animations</div>
      <div class="wrapper-center-content">
        <a href="demo21.html">Demo 21</a>
        <a href="demo22.html">Demo 22</a>
        <a href="demo23.html">Demo 23</a>
        <a href="demo24.html">Demo 24</a>
        <a href="demo25.html">Demo 25</a>
        <a href="demo26.html">Demo 26</a>
        <a href="demo27.html">Demo 27</a>
        <a href="demo28.html">Demo 28</a>
        <a href="demo29.html">Demo 29</a>
        <a href="demo30.html">Demo 30</a>
      </div>
    </div>
  </div>



</body>
</html>


