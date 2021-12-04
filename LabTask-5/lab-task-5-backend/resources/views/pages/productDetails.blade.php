@extends('layouts.app')
@section('cssLink')
    <link rel="stylesheet" href="{{ url('css/productDetails.css') }}">
@endsection


@section('content')
    <div class="information-container">
        <h1>Product details</h1>
        <p>id : {{ $product->id }}</p>
        <p>p_code : {{ $product->p_code }}</p>
        <p>p_name : {{ $product->p_name }}</p>
        <p>p_desc : {{ $product->p_desc }}</p>
        <p>p_category : {{ $product->p_category }}</p>
        <p>p_price : {{ $product->p_price }}</p>
        <p>p_quantity : {{ $product->p_quantity }}</p>
        <p>p_stock_date : {{ $product->p_stock_date }}</p>
        <p>p_rating : {{ $product->p_rating }}</p>
        <p>p_purchased :{{ $product->p_purchased }}</p>
    </div>

@endsection
