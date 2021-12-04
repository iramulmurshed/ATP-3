@extends('layouts.app')
@section('cssLink')
    <link rel="stylesheet" href="{{ url('css/editProduct.css') }}">
@endsection


@section('content')
    <h1 id="edit-header">Edit product Information</h1>
{{--
    <p>id : {{ $product->id }}</p>
    <p>p_code : {{ $product->p_code }}</p>
    <p>p_name : {{ $product->p_name }}</p>
    <p>p_desc : {{ $product->p_desc }}</p>
    <p>p_category : {{ $product->p_category }}</p>
    <p>p_price : {{ $product->p_price }}</p>
    <p>p_quantity : {{ $product->p_quantity }}</p>
    <p>p_stock_date : {{ $product->p_stock_date }}</p>
    <p>p_rating : {{ $product->p_rating }}</p>
    <p>p_purchased :{{ $product->p_purchased }}</p> --}}


    <form action="/edit-product/{{ $product->id }}" method="POST">
        @csrf
        <section class="form-edit-section">
            <label>product name:</label>
            <input type="text" name='pName' placeholder="Enter Product name" value="{{ $product->p_name }}">
            @error('pName')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <label for="">product code:</label>
            <input type="text" name='pCode' placeholder="Enter Product code" value="{{ $product->p_code }}">
            @error('pCode')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <label for="">product description:</label>
            <input type="text" name='pdesc' placeholder="Enter Product description" value="{{ $product->p_desc }}">
            @error('pdesc')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <label for="pCategory">select category:</label>
            <select name="pCategory">
                <option value="electronics">electronics</option>
                <option value="lifestyle">lifestyle</option>
                <option value="grocery">grocery</option>

            </select>

            @error('pCategory')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <label for="">product price:</label>
            <input type="text" name='pPrice' placeholder="Enter Product price" value="{{ $product->p_price }}">
            @error('pPrice')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <label for="">product Quantity:</label>
            <input type="text" name='pQuantity' placeholder="Enter Product quantity" value="{{ $product->p_quantity }}">
            @error('pQuantity')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <label for="">product rating:</label>
            <input type="text" name='pRating' placeholder="Enter Product rating" value="{{ $product->p_rating }}">
            @error('pRating')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <label>product stock date:</label>
            <input type="date" name="pStockDate" value="{{ $product->p_stock_date }}">

            @error('pStockDate')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <label>product purchase date:</label>
            <input type="date" name="pPurchased" value="{{ $product->p_purchased }}">

            @error('pPurchased')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <button type="submit" id="s-button">submit</button>

        </section>
    </form>

@endsection
