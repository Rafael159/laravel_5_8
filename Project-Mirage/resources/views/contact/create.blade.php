@extends('layout')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>

    <form action="contact/" method="POST">
        <div class="form-group">
            <label for="name">Name</label>            
            <input type="text" name="name" autocomplete="off" placeholder="Name" value="{{ old('name') }}" class="form-control">
            <div>
                {{ $errors->first('name') }}
            </div>
        </div><br/>
        
        <div class="form-group">   
            <label for="email">Email</label>         
            <input type="email" name="email" autocomplete="off" placeholder="Email" value="{{ old('email') }}" class="form-control">
            <div>
                {{ $errors->first('email') }}
            </div>
        </div><br/>

        <div class="form-group">   
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control">
                    {{ old('message') }}
            </textarea>       
           
            <div>
                {{ $errors->first('message') }}
            </div>
        </div><br/>

        @csrf

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection