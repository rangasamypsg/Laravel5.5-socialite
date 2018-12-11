@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <!-- <a href="login/github" class="btn btn-primary">
                                    <span style="margin-right: 10px">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-614.000000, -553.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g id="github" transform="translate(614.000000, 553.000000)">
                                                        <path d="M12,0.297 C5.37,0.297 0,5.67 0,12.297 C0,17.6 3.438,22.097 8.205,23.682 C8.805,23.795 9.025,23.424 9.025,23.105 C9.025,22.82 9.015,22.065 9.01,21.065 C5.672,21.789 4.968,19.455 4.968,19.455 C4.422,18.07 3.633,17.7 3.633,17.7 C2.546,16.956 3.717,16.971 3.717,16.971 C4.922,17.055 5.555,18.207 5.555,18.207 C6.625,20.042 8.364,19.512 9.05,19.205 C9.158,18.429 9.467,17.9 9.81,17.6 C7.145,17.3 4.344,16.268 4.344,11.67 C4.344,10.36 4.809,9.29 5.579,8.45 C5.444,8.147 5.039,6.927 5.684,5.274 C5.684,5.274 6.689,4.952 8.984,6.504 C9.944,6.237 10.964,6.105 11.984,6.099 C13.004,6.105 14.024,6.237 14.984,6.504 C17.264,4.952 18.269,5.274 18.269,5.274 C18.914,6.927 18.509,8.147 18.389,8.45 C19.154,9.29 19.619,10.36 19.619,11.67 C19.619,16.28 16.814,17.295 14.144,17.59 C14.564,17.95 14.954,18.686 14.954,19.81 C14.954,21.416 14.939,22.706 14.939,23.096 C14.939,23.411 15.149,23.786 15.764,23.666 C20.565,22.092 24,17.592 24,12.297 C24,5.67 18.627,0.297 12,0.297" id="Shape"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    Login with GitHub
                                </a> -->
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                            <div class="col-md-4">
                            &nbsp;
                            </div>
                            <div class="col-md-6">
 
                               <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
 
                               <a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
 
                               <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
 
                               <a href="{{ url('login/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
 
                               <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
 
                               <a href="{{ url('login/bitbucket') }}" class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
 
                           </div>
                            <div class="col-md-2">&nbsp;
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
