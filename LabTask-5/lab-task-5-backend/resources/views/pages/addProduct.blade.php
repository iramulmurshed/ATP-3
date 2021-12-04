@extends('layouts.app')
@section('cssLink')
    <link rel="stylesheet" href="{{ url('css/addProduct.css') }}">
@endsection

@section('content')
    <h1 id="heading">Add Product</h1>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="form-container">
        <form action="{{ route('addProduct') }}" method="POST">
            @csrf
                <label>product name:</label>
                <input type="text" name='pName' placeholder="Enter Product name" value="{{ old('pName') }}">
                @error('pName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
               <label for="">product code:</label>
                <input type="text" name='pCode' placeholder="Enter Product code" value="{{ old('pCode') }}">
                @error('pCode')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <label for="">product description:</label>
                <input type="text" name='pdesc' placeholder="Enter Product description" value="{{ old('pdesc') }}">
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
                <input type="text" name='pPrice' placeholder="Enter Product price" value="{{ old('pPrice') }}">
                @error('pPrice')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <label for="">product Quantity:</label>
                <input type="text" name='pQuantity' placeholder="Enter Product quantity" value="{{ old('pQuantity') }}">
                @error('pQuantity')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <label for="">product rating:</label>
                <input type="text" name='pRating' placeholder="Enter Product rating" value="{{ old('pRating') }}">
                @error('pRating')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                    <label>product stock date:</label>
                    <input type="date" name="pStockDate" value="{{ old('pStockDate') }}">

                @error('pStockDate')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                    <label>product purchase date:</label>
                    <input type="date" name="pPurchased" value="{{ old('pPurchased') }}">

                @error('pPurchased')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <button type="submit">Submit</button>


        </form>
    </div>
@endsection
