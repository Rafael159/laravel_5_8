@extends('layout')

@section('title', 'Customer List')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="customers" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>            
                    <input type="text" name="name" autocomplete="off" placeholder="Name" value="{{ old('name')}}" class="form-control">
                    <div>
                        {{ $errors->first('name') }}
                    </div>
                </div><br/>
        
                <div class="form-group">   
                    <label for="email">Email</label>         
                    <input type="email" name="email" autocomplete="off" placeholder="Email" value="{{ old('email')}}" class="form-control">
                    <div>
                        {{ $errors->first('email') }}
                    </div>
                </div><br/>
        
                <button type="submit" class="btn btn-primary">Add customer</button>
                @csrf
            </form>
        </div>
    </div>    
    <hr>
    <div class="row">
        <div class="col-12">
            <ul>
                @foreach ($customers as $customer)
                    <li><b>{{ $customer->name }}</b> <span class="text-muted">({{ $customer->email }})</span></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection