@extends('layouts.app')
@section('content')
    <h1>Our Services Page</h1>
    <ul>
        @foreach ($data as $service)
            <li>This is user {{ $service }}</li>
        @endforeach
    </ul>

@endsection
