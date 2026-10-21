@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Home</div>
            <div class="card-body">
                <div class="alert alert-success">
                    @if ($message = Session::get('success'))
                        {{ $message }}
                    @else
                        You are logged in!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection