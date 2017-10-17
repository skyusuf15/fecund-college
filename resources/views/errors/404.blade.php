@extends('layouts.app')

@section('page-content')

        <div class="inner-block">
            <div class="error-404">     
                <div class="error-page-left">
                    <img src="{{ url('images/errors/404.png') }}" alt="404 image">
                </div>
                <div class="error-right">
                    <h2>Oops! Page Not Open</h2>
                    <h4>Nothing Is Found Here!!</h4>
                    <a href="/">Go Back</a>
                </div>
            </div>
        </div>

@endsection