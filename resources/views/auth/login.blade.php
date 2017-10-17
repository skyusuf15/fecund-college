@extends('layouts.get_access')
@section('title')
Login
@endsection
@section('form')

 <h2>Sign In Now</h2>
       <form method="POST" action="{{ route('login') }}">
         {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <input id="email" type="email" class="ggg" name="email" placeholder="E-MAIL" required="" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <input id="password" type="password" class="ggg" name="password" placeholder="PASSWORD" required="">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
              
            </div>

            <span><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />Remember Me</span>
            <h6><a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a></h6>
                <div class="clearfix"></div>
                <input type="submit" value="Sign In">

        </form>
        <p>Want to create a new admin ?<a href="/register">Create a new account</a></p>

@endsection