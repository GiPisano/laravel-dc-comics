@extends('layouts.app')

@section('title', 'comics')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Comics list</h1>

      <table class="table">
        <thead>
          <th>ID</th>
          <th>title</th>
          <th>price</th>
          <th>series</th>
          <th>sale_date</th>
          <th>type</th>
          <th>more</th>
        </thead>
        <tbody>
          @foreach($comics as $comic)
          <tr>
            <td>{{ $comic->id }}</td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
            <td>
              <a href="{{ route('comics.show', $comic->id) }}">
                link
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $comics->links() }}
    </div>
  </section>
@endsection
