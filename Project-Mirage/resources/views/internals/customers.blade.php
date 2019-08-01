@extends('layout')

@section('content')
    <h1>Customers</h1>
    <form action="customers" method="POST" class="pb-5">
        <p>Name:</p>
        <div class="input-group">            
        <input type="text" name="name" autocomplete="off" placeholder="Name" value="{{ old('name')}}">
            <div>
                {{ $errors->first('name') }}
            </div>
        </div><br/>

        <p>Email:</p>
        <div class="input-group">            
            <input type="email" name="email" autocomplete="off" placeholder="Email" value="{{ old('email')}}">
            <div>
                {{ $errors->first('email') }}
            </div>
        </div><br/>

        <button type="submit">Add customer</button>
        @csrf
    </form>
    <ul>
        @foreach ($customers as $customer)
            <li><b>{{ $customer->name }}</b> <span class="text-muted">({{ $customer->email }})</span></li>
        @endforeach
    </ul>
@endsection