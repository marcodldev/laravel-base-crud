@extends('layouts.app')

@section('titolo-pagina', 'DC-Home')

@section('contenuto-main')

    <div class="mainDiv">



        <div class="sec2">

            @if (session('success'))
                <div class="alert alert-success container p-3">
                    {{ session('success') }}
                </div>
            @endif



            <button class="relative button">CURRENT SERIES</button>
        </div>
        <section class="sec1">
            <div class="cards">
                @foreach ($comics as $elem)
                    <div class="cardFumetto">
                        <img class="flex" src="{{ $elem->thumb }}" :alt="">
                        <h4 class="flex"> {{ $elem['series'] }}</h4>
                        <a class="button btn1" href="{{ route('comic.show', $elem->id) }}">Clicca per info</a>
                        {{-- <a href="{{ route('single', compact('key')) }}" class="button btn1">Clicca qui per info</a> --}}
                    </div>
                @endforeach
            </div>
            <div class="">
                {{-- <button class="button btn1 loadmore">LOAD MORE</button> --}}
                <span class="text-center navPag d-flex justify-content-center">{{ $comics->links() }}</span>
            </div>

            <div>
                <a href="{{ route('comic.create') }}" class="btn btn-primary">Inserisci nuovo fumetto</a>
            </div>
        </section>

        <section class="features">
            <div class="imgcontainer">
                <div class="flex">
                    <img src="/img/buy-comics-digital-comics.png" alt="digitalcomics" />
                    <p>DIGITAL COMIX</p>
                </div>

                <div class="flex">
                    <img src="/img/buy-comics-merchandise.png" alt="merchandise" />
                    <p>DC MERCHANDISE</p>
                </div>

                <div class="flex">
                    <img src="/img/buy-comics-subscriptions.png" alt="subscriptions" />
                    <p>SUBSCRIPTION</p>
                </div>

                <div class="flex">
                    <img src="/img/buy-comics-shop-locator.png" alt="shoplocator" />
                    <p>COMIC SHOP LOCATOR</p>
                </div>

                <div class="flex">
                    <img src="/img/buy-dc-power-visa.svg" alt="powervisa" />
                    <p>DC POWER VISA</p>
                </div>
            </div>
        </section>
    </div>

@endsection
