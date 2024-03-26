@extends('layouts.app')

@section('title', 'Modifica Comics' . $comic->title)

@section('main-content')

    <section>
        <div class="container">
            <h1>Modifica Fumetto</h1>
            <div class="text-center">
                <a href="{{ route('comics.index') }}" class="btn btn-primary mb-3">torna alla lista</a>
                <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary mb-3">torna ai dettagli</a>
            </div>

            <form action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="row g-2">
                    <div class="col-4">
                        <label class="form-lable" for="title">TITLE</label>
                        <input class="form-control" value="{{ $comic->title }}" type="text" name="title"
                            id="title" />
                    </div>
                    <div class="col-4">
                        <label class="form-lable" for="thumb">THUMB</label>
                        <input class="form-control" value="{{ $comic->thumb }}" type="url" name="thumb"
                            id="thumb" />
                    </div>
                    <div class="col-4">
                        <label class="form-lable" for="price">PRICE</label>
                        <input class="form-control" value="{{ $comic->price }}" type="text" name="price"
                            id="price" />
                    </div>
                    <div class="col-4">
                        <label class="form-lable" for="series">SERIES</label>
                        <input class="form-control" value="{{ $comic->series }}" type="text" id="series"
                            name="series" />
                    </div>
                    <div class="col-4">
                        <label class="form-lable" for="sale_date">SALE DATE</label>
                        <input class="form-control" value="{{ $comic->sale_date }}" type="date" id="sale_date"
                            name="sale_date" />
                    </div>
                    <div class="col-4">
                        <label class="form-lable" for="type">TYPE</label>
                        <input class="form-control" value="{{ $comic->type }}" type="text" name="type"
                            id="type" />
                    </div>
                    <div class="col-12">
                        <label class="form-lable" for="description">DESCRITION</label>
                        <textarea class="form-control" name="description" rows="5" id="description">{{ $comic->description }}</textarea>
                    </div>
                </div>

                <button class="btn btn-success mt-3">Inserisci</button>
            </form>
        </div>
    </section>

@endsection
