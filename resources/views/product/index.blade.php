@extends('components.layout')

{{-- @section('title', 'About Us') --}}

@section('content')
        <h2>{{ 'product' }}</h2>
        
        <table>
            <form action="{{ route('product_test.view') }}" method="GET">
                
                <button type="submit" class="btn btn-xs btn-primary" name="btn_action" value="NEW" title="New Record">{{ 'New'  }}</button>
            </form>
            <header>
                <tr>
                    <th>{{ 'No' }}</th>
                    <th>{{ 'Name EN' }}</th>
                    <th>{{ 'Name KH' }}</th>
                    <th>{{ 'Status' }}</th>
                    <th>{{ 'Action' }}</th>
                </tr>
            </header>
            <tbody>
                @foreach ($list as $obj)
                    <tr>
                        <td>{{ $obj->id }}</td>
                        <td>{{ $obj->product_en }}</td>
                        <td>{{ $obj->product_kh }}</td>
                        <td>{{ $obj->status }}</td>
                        <td>
                            
                            <form action="{{ route('product_test.view') }}" method="GET">
                                <input type="hidden" name="product_id" value="{{ $obj->id }}">
                                
                                <button type="submit" class="btn btn-xs btn-primary" name="btn_action" value="VIEW" title="View Record">{{ 'View' }}</button>
                                <button type="submit" class="btn btn-xs btn-primary" name="btn_action" value="EDIT" title="Edit Record">{{ 'Edit' }}</button>
                                <button type="submit" class="btn btn-xs btn-primary" name="btn_action" value="DELETE" title="Edit Record">{{ 'Delete' }}</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
@endsection
