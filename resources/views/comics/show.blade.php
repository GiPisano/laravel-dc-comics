@extends('layouts.app')

@section('title', 'comics')

@section('main-content')


    <div class="container">
        <h1 class="my-4 text-center">{{ $comic->title }}</h1>
        <div class="text-center">
            <a href="{{ route('comics.create') }}" class="btn btn-primary mb-3">Inserisci un nuovo fumetto</a>
            <a href="{{ route('comics.index') }}" class="btn btn-primary mb-3">torna alla lista</a>
            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary mb-3">Modifica</a>
        </div>
        <div class="row g-5">
            <div class="col-4 container-img-show">
                <img src="{{ $comic->thumb }}" alt="" class="img-show">
            </div>
            <div class="col-8">
                <h2 class="h4">Description</h2>
                <p>{{ $comic->description }}</p>

                <div class="row">
                    <div class="col-4">
                        <h2 class="h4">Price</h2>
                        <p>{{ $comic->price }}</p>
                    </div>
                    <div class="col-4">
                        <h2 class="h4">Sale date</h2>
                        <p>{{ $comic->sale_date }}</p>
                    </div>
                    <div class="col-4">
                        <h2 class="h4">Series</h2>
                        <p>{{ $comic->series }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
