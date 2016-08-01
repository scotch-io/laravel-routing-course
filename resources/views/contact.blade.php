@extends('layouts.main')

@section('content')

    <h2>Contact Form</h2>

    <form method="POST" action="{{ route('contact') }}">

        {!! csrf_field() !!}

        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
        </div>

        <div>
            <button type="submit">Contact!</button>
        </div>
        
    </form>
    
@endsection