@extends('layouts.app')

@section('titolo-pagina', 'Inserisci nuovo fumetto')

@section('contenuto-main')

    <div class="container p-3">
        <h1>Inserisci un nuovo fumetto</h1>

        @if($errors->any())
        <div class="alert alert-danger my-3">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('comic.store')  }}" method='POST'>
            @csrf

            <div class="mb-3">
                <label class="form-label" for="">Title</label>
                <input class="form-control" type="text" name="title" id="" maxlength="50">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Descrizione</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10" maxlength="500"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Immagine</label>
                <input class="form-control" type="text" name="thumb" id="" maxlength="50">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Prezzo</label>
                <input class="form-control" type="number" name="price" step="0.01" maxlength="50">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Serie</label>
                <input class="form-control" type="text" name="series" id="" maxlength="50">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Data di vendita</label>
                <input class="form-control" type="date" name="sale_date" id="" maxlength="50">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Tipologia</label>
                <input class="form-control" type="text" name="type" id="" maxlength="50">
            </div>

            <button type="submit" class="btn btn-success">Inserisci nuovo fumetto</button>
        </form>
    </div>



@endsection
