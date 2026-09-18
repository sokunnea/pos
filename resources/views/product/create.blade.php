@extends('components.layout')

{{-- @section('title', 'About Us') --}}
@section('content')
    <h2>{{ 'product->New' }}</h2>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div>
            <label for="product_en">{{ 'Name En' }}</label>
            <input type="text" name="product_en" id="product_en"/>
        </div>
        <div>
            <label for="product_kh">{{ 'Name Kh' }}</label>
            <input type="text" name="product_kh" id="product_kh"/>
        </div>
        <div>
            <label for="status">{{ 'Status' }}</label>
            <input type="text" name="status" id="status"/>
        </div>
        <div>
            <label for="description">{{ 'Description' }}</label>
            <input type="text" name="description" id="description"/>
        </div>
        <button type="submit" class="btn btn-xs btn-primary">Submit</button>
    </form>
@endsection
            
        