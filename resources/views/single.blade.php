@extends('layouts.app')

@section('titolo-pagina')
    DC-{{ $elem->title }}
@endsection

@section('contenuto-main')
    <div>
        <div class="sec2">

            @if (session('success'))
            <div class="alert alert-success container p-3">
                {{ session('success') }}
            </div>
        @endif

        </div>
        <div class="bg-bluestripe">

        </div>
        <div class="container p-3">
            <div class="row d-flex flex-nowrap">
                <div class="w-75 comicDesc">
                    {{-- @foreach ($comics as $elem) --}}
                    <img src="{{ $elem->thumb }}" alt="{{ $elem->series }}">
                    <h3>{{ $elem->title }}</h3>
                    <div class="d-flex">
                        <div class="d-flex border-2 p-3 bg-avaibility2 w-75 justify-content-between">
                            <div class="w-75 bg-avaibility d-flex justify-content-between">
                                <span class="d-flex">
                                    <h6 class="text-white-50">U.S. Price: </h6>
                                    <h6>{{ $elem->price }}</h6>
                                </span>
                                <h6 class="avaible text-white-50">AVAILABLE</h6>
                            </div>
                        </div>
                        <div class="w-25 border-start border-dark ">
                            <div class="bg-avaibility p-3 ">
                                <h6 class="fs-5">Check Avaibility &#8595 </h6>
                            </div>
                        </div>
                    </div>

                    <p class="fw-bold text-muted">{!! $elem->description !!}</p>
                    {{-- @endforeach --}}
                </div>
                <div class="w-25">
                    <h3 class="text-end fs-6 text">ADVERTISEMENT</h3>
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>
        <div class="bg-white-50 border-top border-bottom ">
            <div class="container d-flex">
                <div class="row d-flex">
                    <div>
                        {{--    <h1>Talent</h1>
                        <h6 class="border-top border-bottom">Art By:{{ $elem->artists }} </h6>
                        <h6 class="border-top border-bottom">Written By: {{ $elem->writers }}</h6> --}}
                    </div>
                    <div>
                        <h1>Specs</h1>
                        <h6 class="border-top border-bottom">Series: {{ $elem->series }}</h6>
                        <h6 class="border-top border-bottom">U.S.Price: {{ $elem->price }}</h6>
                        <h6 class="border-top border-bottom">On Sale Date: {{ $elem->sale_date }}</h6>
                    </div>
                    <div class="d-flex p-2">

                        <form action="{{ route('comic.destroy', $elem->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dark">
                                <i class="fa-regular fa-circle-xmark bigfont"></i>

                            </button>
                        </form>
                        <a class="btn btn-dark mx-2" href="{{ route('comic.edit', $elem->id) }}">
                            <i class="fa-solid fa-pencil bigfont"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
