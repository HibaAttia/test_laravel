
@extends('layouts.app')

@section('title','Details for' . $customer->name)




@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Details for {{ $customer->name}}</h1>
        <p><a href="/customers/{{ $customer->id }}/edit">modifier un post</a></p>

        <form action="/customers/{{ $customer->id }}" method="POST">
            @method('DELETE')
            @csrf

            <button class="btn btn-danger" type="submit">supprimer un post</button>
        </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Nom</strong> {{$customer->email}}</p>
            <p><strong>Email</strong> {{$customer->email}}</p>
            <p><strong>Societé</strong> {{$customer->company->name}}</p>

        </div>
    </div>




@endsection
