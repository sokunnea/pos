@extends('layouts.app')
{{-- @extends('components.layout') --}}

@section('content')
<div class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
    {{-- <li class="breadcrumb-item"><a href="{{ route('elements.index') }}">{{ __('Element') }}</a></li> --}}
    <li class="breadcrumb-item">{{ __('Element') }}</li>
</div>

{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"> --}}
<div class="row">
    <div class="col-md-12">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">Element List</div>
            <div class="card-body">
                @can('element-create')
                    <a href="{{ route('elements.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Element</a>
                @endcan
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name_En</th>
                        <th scope="col">Name_kh</th>
                        <th scope="col">Master</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($elements as $element)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $element->code }}</td>
                            <td>{{ $element->name_en }}</td>
                            <td>{{ $element->name_kh }}</td>
                            <td>{{ $element->master }}</td>
                            <td>{{ $element->status }}</td>
                            <td>
                                <form action="{{ route('element.destroy', $element->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('element.show', $element->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                                    @can('element-edit')
                                        <a href="{{ route('element.edit', $element->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   
                                    @endcan
                                    @can('element-delete')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this element?');"><i class="bi bi-trash"></i> Delete</button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Element Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $elements->links() }}

            </div>
        </div>
    </div>
</div>
    
@endsection
