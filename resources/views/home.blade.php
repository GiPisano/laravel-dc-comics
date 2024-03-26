@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section id="home">
        <div class="background-home">
            <div class="container py-4">
                <h1 class="text-center">Comics</h1>
                <div>
                    <a href="{{ route('comics.create') }}" class="btn  btn-light mb-4">Inserisci un nuovo fumetto</a>
                    <a href="{{ route('comics.index') }}" class="btn btn-light mb-4">Vai alla lista dei fumetti</a>
                </div>

                <div class="row g-3">
                    @foreach ($comics as $comic)
                        <div class="col-2 img-comic-home">
                            <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic->thumb }}"
                                    alt="{{ $comic->title }}"></a>
                        </div>
                    @endforeach
                </div>
                <div class="my-4">
                    {{ $comics->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
