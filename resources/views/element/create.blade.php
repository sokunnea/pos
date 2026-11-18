@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Element
                </div>
                <div class="float-end">
                    <a href="{{ route('elemnt.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('element.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start">Code</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}">
                            @error('code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name_en" class="col-md-4 col-form-label text-md-end text-start">Name_En</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name_en" name="name_en" value="{{ old('name_en') }}">
                            @error('name_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name_kh" class="col-md-4 col-form-label text-md-end text-start">Name_Kh</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name_kh') is-invalid @enderror" id="name_kh" name="name_kh" value="{{ old('name_kh') }}">
                            @error('name_kh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    

                    <div class="mb-3 row">
                        <label for="master" class="col-md-4 col-form-label text-md-end text-start">Mater</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('master') is-invalid @enderror" id="master" name="master" value="{{ old('master') }}">
                            @error('master')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="status" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('status') is-invalid @enderror" id="status" name="status">{{ old('status') }}</textarea>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Element">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection