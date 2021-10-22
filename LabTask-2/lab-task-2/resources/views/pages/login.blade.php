@extends('layouts.app')
@section('cssLink')
    <link rel="stylesheet" href="./css/login.css">
@endsection
@section('content')
    <h1>login page</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="d-flex flex-column w-50 mx-auto my-5 container-login">
            <p>Enter your credentials:</p>
            <input type="text" name="email" placeholder="enter your email">
            @if ($errors->has('email'))
                {{ $errors->first('email') }}
            @endif
            <input type="password" name="password" placeholder="enter your password">
            @if ($errors->has('password'))
                {{ $errors->first('password') }}
            @endif
            <button type="submit" class="btn btn-success">log in</button>
        </div>
    </form>
@endsection
