@extends('layouts.app')

@section('title', 'comics')

@section('main-content')

   
    <div class="container">
        <h1>Comic description</h1>
        <a href="{{ route('comics.create')}}" class="btn btn-primary mb-3">Crea una nuova lista</a>
        <a href="{{ route('comics.index')}}" class="btn btn-primary mb-3">torna alla lista</a>
        <div class="row g-5">
            <div class="col-4">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col-8">
                <h2 class="h4">Description</h2>
                <p>{{ $comic->description }}</p>
            
            <div class="row">
                <div class="col-6">
                    <h2 class="h4">Price</h2>
                    <p>{{ $comic->price }}</p>
                </div>
                <div class="col-6">
                    <h2 class="h4">Sale date</h2>
                    <p>{{ $comic->sale_date }}</p>
                </div>
            </div>
        </div>
        </div>
    </div>
    
@endsection
