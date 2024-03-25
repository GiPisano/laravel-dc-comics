@extends('layouts.app')

@section('title', 'comics')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Comics list</h1>

      <table class="tale">
        <thead>
          <th>ID</th>
          <th>title</th>
          <th>description</th>
          <th>thumb</th>
          <th>price</th>
          <th>series</th>
          <th>sale_date</th>
          <th>type</th>
        </thead>
        <tbody>
          @foreach($comics as $comic)
          <tr>
            <td>{{ $comic->id }}</td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->thumb }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $comics->links() }}
    </div>
  </section>
@endsection
