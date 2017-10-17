@extends('layouts.get_access')
@section('title')
Register
@endsection
@section('form')

 <h2>Register Now</h2>
    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    
                <input type="text" class="ggg" name="name" placeholder="NAME" required="" value="{{ old('name') }}" autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
             
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="ggg" name="email" placeholder="E-MAIL" value="{{ old('email') }}" required="">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                
            </div>



            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" id="password" class="ggg" name="password" placeholder="PASSWORD" required="">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                
            </div>


            <input type="password" id="password-confirm" class="ggg" name="password_confirmation" placeholder="PASSWORD" required="">

                <div class="clearfix"></div>
                <input type="submit" value="Create">
        </form>
        <p>Already Registered.<a href="/login">Login</a></p>

@endsection