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

                <div class="form-group">
                    <label for="active">Status</label>
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled>Select customer status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
        
                <button type="submit" class="btn btn-primary">Add customer</button>
                @csrf
            </form>
        </div>
    </div>    
    <hr>
    <div class="row">
        <div class="col-6">
            <h3>Active customer</h3>
            <ul>
                @foreach ($activeCustomers as $activeCustomer)
                    <li><b>{{ $activeCustomer->name }}</b> <span class="text-muted">({{ $activeCustomer->email }})</span></li>
                @endforeach
            </ul>
        </div>
        <div class="col-6">
            <h3>Inactive customer</h3>
            <ul>
                @foreach ($inactiveCustomers as $inactiveCustomer)
                    <li><b>{{ $inactiveCustomer->name }}</b> <span class="text-muted">({{ $inactiveCustomer->email }})</span></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection