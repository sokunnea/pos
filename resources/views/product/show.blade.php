@extends('components.layout')

{{-- @section('title', 'About Us') --}}
@section('content')
    <h2>{{ 'product->Show' }}</h2>
    <div>
        <label for="product_en">{{ 'Name En' }}</label>
        <input type="text" name="product_en" id="product_en" value="{{ $product->product_en }}"/>
    </div>
    <div>
        <label for="product_kh">{{ 'Name Kh' }}</label>
        <input type="text" name="product_kh" id="product_kh" value="{{ $product->product_kh }}"/>
    </div>
    <div>
        <label for="status">{{ 'Status' }}</label>
        <input type="text" name="status" id="status" value="{{ $product->status }}"/>
    </div>
    
@endsection
            
        