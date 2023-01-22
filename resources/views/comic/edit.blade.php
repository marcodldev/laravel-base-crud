@extends('layouts.app')

@section('titolo-pagina', 'Modifica fumetto')

@section('contenuto-main')

    <div class="container p-3">
        <h1>Modifica un fumetto</h1>

        <form action="{{ route('comic.update',$comic->id)  }}" method='POST'>
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label" for="">Title</label>
                <input value="{{ $comic->title }}" class="form-control" type="text" name="title" id="">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Descrizione</label>
                <textarea  name="description" class="form-control" id="" cols="30" rows="10">
                    {!! $comic->description !!}
                </textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Immagine</label>
                <input value="{{ $comic->thumb }}" class="form-control" type="text" name="thumb" id="">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Prezzo</label>
                <input value="{{ $comic->price }}" class="form-control" type="number" name="price" step="0.01">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Serie</label>
                <input value="{{ $comic->series }}" class="form-control" type="text" name="series" id="">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Data di vendita</label>
                <input value="{{ $comic->sale_date }}" class="form-control" type="date" name="sale_date" id="">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Tipologia</label>
                <input value="{{ $comic->type }}" class="form-control" type="text" name="type" id="">
            </div>

            <button type="submit" class="btn btn-success">Applica le modifiche!</button>
        </form>
    </div>



@endsection
