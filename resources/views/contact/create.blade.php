@extends('layouts.app')

@section('title','Contact us')
   
@section('content')
    <h1>Contact Us</h1>

    <form action="{{ route('contact.store')}}" method="POST">
        <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" name="name" value="{{old('name') }}" class="form-control">
                    <div>{{ $errors->first('name')}}</div>
        </div>


        <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="" cols="30" rows="10" class="form-control" >{{old('message') }}</textarea>
                    <div>{{ $errors->first('message')}}</div>
        </div>

        @csrf
        <button type="submit" class="btn btn-primary">Envoyer un message</button>
    </form>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="" cols="30" rows="10" class="form-control" >{{old('message') }}</textarea>
   
@endsection