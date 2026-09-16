@extends('components.layout')

{{-- @section('title', 'About Us') --}}

@section('content')
        <h2>{{ 'product' }}</h2>
        
        <table>
            <header>
                <tr>
                    <th>{{ 'No' }}</th>
                    <th>{{ 'Name EN' }}</th>
                    <th>{{ 'Name KH' }}</th>
                    <th>{{ 'Status' }}</th>
                </tr>
            </header>
            <tbody>
                @foreach ($list as $obj)
                    <tr>
                        <td>{{ $obj->id }}</td>
                        <td>{{ $obj->product_en }}</td>
                        <td>{{ $obj->product_kh }}</td>
                        <td>{{ $obj->status }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        
@endsection