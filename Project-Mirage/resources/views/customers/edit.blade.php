@extends('layout')

@section('title', 'Edit Customer')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Detais for {{ $customer->name}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/customers/{{ $customer->id}}" method="POST">
                @method('PATCH')
                @include('customers.form')
        
                <button type="submit" class="btn btn-primary">Add customer</button>
            </form>
        </div>
    </div>
@endsection