@extends('layouts.app')

@section('titolo-pagina')
    DC-Index
@endsection


@section('contenuto-main')
    <div class="mainDiv">



        <div class="sec2">

            @if (session('success'))
                <div class="alert alert-success container p-3">
                    {{ session('success') }}
                </div>
            @endif

        </div>
        <section class="sec1 sec1home">
            <div class="cards justify-content-center align-items-center py-5">
                <h1 class="fs-1 fw-lighter">DC-COMICS HOME</h1>

            </div>
            <div class="text-center py-3 ">
                {{-- <button class="button btn1 loadmore">LOAD MORE</button> --}}
                <a href="comic " class="btn btn-primary fs-3 p-4">Vai ai fumetti -></a>
            </div>
        </section>


    </div>
@endsection
