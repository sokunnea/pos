@extends('layouts.app')

@section('content')
    <div class="row">
        @session('success')
        <div class="alert alert-success" role="alert">
            {{ $value }}
        </div>
        @endsession
        @php
            $font_search_product = 'Agency FB';
        @endphp
        <div style="width: 40%;">
            <div class="card-body">
                <table class="table table-striped table-sm table-bordered table-hover">
                    <thead>
                        <tr>
                        <th>{{ 'Item' }}</th>
                        <th>{{ 'Product' }}</th>
                        <th>{{ 'Price' }}</th>
                        <th>{{ 'Qty' }}</th>
                        <th>{{ 'Total' }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ 1 }}</td>
                            <td>{{ 'lol' }}</td>
                            <td>{{ 100 }}</td>
                            <td>{{ 2 }}</td>
                            <td>{{ 200 }}</td>
                        </tr>
                        <tr>
                            <td>{{ 1 }}</td>
                            <td>{{ 'lol' }}</td>
                            <td>{{ 100 }}</td>
                            <td>{{ 2 }}</td>
                            <td>{{ 200 }}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div style="width: 60%;">
            <div class="card-body">
                
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="Enter Product Code" style="font-size: 41px;font-weight: bold;text-align: end;font-family: {{ $font_search_product }};">
                </div>
                <br/>
                
                <div class="row" style="width: 100%;">
                    <div style="width: 60%;background-color: bisque;">
                       <img src="{{ asset('product_picture/cocacola2.jpg') }}"  max-width="500"  max-height="500" class="img-fluid" alt="...">
                    </div>
                    
                    <div style="width: 40%;background-color: aquamarine;">
                        <table class="table table-striped table-sm table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{ 'Product' }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ 'lol' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ 'lolz' }}</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
