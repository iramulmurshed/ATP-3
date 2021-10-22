@extends('layouts.app')
@section('cssLink')
    <link rel="stylesheet" href="./css/signup.css">
@endsection
@section('content')
    <h1>signup Page</h1>

    <div>
        <form action="{{ route('signup') }}" method="post">
            {{ @csrf_field() }}
            <div class=" d-flex flex-column p-3 signup-info-container">
                <input type="text" name="name" placeholder="Enter your name">
                @if ($errors->has('name'))
                {{$errors->first('name')}}

                @endif

                <input type="text" name="email" placeholder="Enter your email">
                @if ($errors->has('email'))
                {{$errors->first('email')}}

                @endif
                <input type="password" name="password" placeholder="Enter your password">
                @if ($errors->has('password'))
                {{$errors->first('password')}}

                @endif
                <input type="text" name="phoneNumber" placeholder="Enter your phone number">
                @if ($errors->has('phoneNumber'))
                {{$errors->first('phoneNumber')}}

                @endif
                <button type="submit" class="btn btn-success">SignUP</button>
            </div>



        </form>
    </div>


@endsection
