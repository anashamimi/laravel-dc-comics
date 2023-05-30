@extends('layouts.app')

@section('content')
    <div class="ah-jumbotron">

    </div>

    @if (session()->has('message'))
        <div class=" alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="ah-cover p-3 bg-primary w-100">
        <div class="container">
            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>
    </div>

    <div class="bg-white">
        <div class="container">

            <div class=" d-flex justify-content-between align-content-center py-5">
                <div>
                    <div class="py-4">
                        <h1 class="text-primary">{{ $comic['title'] }}</h1>
                    </div>

                    <div>
                        <div class=" bg-success p-3 d-inline-block">
                            <p class="text-white">Price: {{ $comic['price'] }}</p>
                        </div>

                        <p class=" text-dark py-4">{{ $comic['description'] }}</p>
                    </div>
                </div>

                <div class="img-comic">
                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>

            </div>

        </div>
        <div class="d-flex justify-content-center align-items-center p-4">
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button btn btn-danger"
                data-item-title="{{$comic->title}}" onclick="comic.openModal('event', {{$comic->id}})">Cancella</button>
            </form>

        </div>
    </div>

@include('partials.popupdelete')
@endsection
