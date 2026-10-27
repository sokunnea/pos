@extends('layouts.app')

@section('content')
{{-- <div class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
    <li class="breadcrumb-item">{{ __('Purchase Order') }}</li>
</div> --}}

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Purchase Order</h2>
        </div>
        <div class="pull-right">
        @can('purchase-order-create')
                    <a href="{{ route('purchase_order.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> {{ 'Create' }}</a>
                @endcan
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Purchase Date</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($purchase_order_list as $purchase_order)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->product_code }}</td>
                        <td>{{ $product->purchase_date }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->amount }}</td>
                        <td>
                            <form action="{{ route('purchase_order.destroy', $product->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('purchase_order.show', $product->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                                @can('purchase-order-edit')
                                    <a href="{{ route('purchase_order.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   
                                @endcan
                                @can('purchase-order-delete')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?');"><i class="bi bi-trash"></i> Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @empty
                        <td colspan="6">
                            <span class="text-danger">
                                <strong>No Product Found!</strong>
                            </span>
                        </td>
                    @endforelse
                </tbody>
            </table>
            {{ $purchase_order_list->links() }}

        </div>
    </div>
</div>
    
@endsection