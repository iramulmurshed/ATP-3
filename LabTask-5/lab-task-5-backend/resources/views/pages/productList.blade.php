@extends('layouts.app')
@section('cssLink')
<link rel="stylesheet" href="{{url('css/productList.css')}}">
@endsection

@section('content')
<div class="table-container">
    <table class="table">
        <tr>
            <th>id</th>
            <th>p_code</th>
            <th>p_name</th>
            <th>p_category</th>
            <th>p_price</th>
            <th>p_quantity</th>
            <th>p_rating</th>
            <th id="action">actions</th>
        </tr>

        @foreach ($products as $product)
            <tr>

                <td>{{ $product->id }}</td>
                <td>{{ $product->p_code }}</td>
                <td>{{ $product->p_name }}</td>

                <td>{{ $product->p_category }}</td>
                <td>{{ $product->p_price }}</td>
                <td>{{ $product->p_quantity }}</td>
                <td>{{ $product->p_rating }}</td>
                <td>

                    <a href="/product-details/{{ $product->id }}" class="btn">view details</a>
                    <a href="/edit-product/{{ $product->id }}" class="btn">edit</a>
                    <a href="/product-list/delete/{{ $product->id }}" class="btn btn-delete">delete</a>
                </td>
            </tr>

        @endforeach
    </table>
</div>
@endsection
