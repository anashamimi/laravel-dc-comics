@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Modifica il comic</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 d-inline-block">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$comic->title}}" placeholder="Modifica il titolo">
            </div>

            <div class="form-outline w-75 mb-4">
                <label class="form-label" for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" placeholder="Modifica la descrizione">{{$comic->description}}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{$comic->thumb}}" placeholder="Modifica il link dell'immagine">

            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" value="{{$comic->price}}" placeholder="Modifica il prezzo">

            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" value="{{$comic->series}}" placeholder="Modifica la serie">

            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{$comic->sale_date}}" placeholder="Modifica la data di uscita">

            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" value="{{$comic->type}}" placeholder="Modifica il tipo">
            </div>
        </div>

        <div class=" d-flex justify-content-center align-items-center gap-5 p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>

        </form>
    </section>
@endsection


