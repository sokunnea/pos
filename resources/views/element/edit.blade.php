@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Element
                </div>
                <div class="float-end">
                    <a href="{{ route('element.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('element.update', $element->code) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start">Code</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $element->code }}">
                            @error('code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name_kh" class="col-md-4 col-form-label text-md-end text-start">Name_En</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name_en" name="name_en" value="{{ $element->name_en }}">
                            @error('name_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name_kh" class="col-md-4 col-form-label text-md-end text-start">Name_Kh</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name_kh') is-invalid @enderror" id="name_kh" name="name_kh" value="{{ $element->name_kh }}">
                            @error('name_kh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="master" class="col-md-4 col-form-label text-md-end text-start">Master</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('master') is-invalid @enderror" id="master" name="master" value="{{ $element->master }}">
                            @error('name_kh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                   

                    <div class="mb-3 row">
                        <label for="status" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('status') is-invalid @enderror" id="status" name="description">{{ $lement->status}}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection