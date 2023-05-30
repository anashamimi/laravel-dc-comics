@extends('layouts.app')

@section('content')
    <div class="ah-jumbotron">

    </div>

    <div class="container">

        @if (session()->has('message-delete'))
            <div class="alert-danger">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="ah-current bg-primary text-uppercase fw-bold fs-5 p-2 d-inline-block">
            current series
        </div>

        <div class="row py-4">

            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 gy-5">
                    <div class="ah-card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        <a class="text-white text-decoration-none"
                            href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic['series'] }}</a>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="p-5 d-flex justify-content-center">
            <a href="{{ route('comics.create') }}" type="button" class="btn btn-primary rounded-0 px-5 text-uppercase">ADD
                COMIC</a>
        </div>
    </div>
@endsection
