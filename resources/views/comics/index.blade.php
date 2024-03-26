@extends('layouts.app')

@section('title', 'comics')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Comics list</h1>

      <table class="table">
        <thead>
          <th>title</th>
          <th>price</th>
          <th>series</th>
          <th>type</th>
          <th></th>
        </thead>
        <tbody>
          @foreach($comics as $comic)
          <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->type }}</td>
            <td class="d-flex justify-content-between">
              <div>
                <a href="{{ route('comics.show', $comic) }}">
                  <i class="fa-solid fa-eye fa-lg" style="color: #0c4d13;"></i>
                </a>
              </div>
              <div>
                <a href="{{ route('comics.edit', $comic) }}">
                  <i class="fa-solid fa-pen fa-lg" style="color: #203fa4;"></i>
                </a>
              </div>
              <div>
                <a href="{{ route('comics.show', $comic->id) }}">
                  <i class="fa-solid fa-trash-can fa-lg" style="color: #e00b04;"></i>
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $comics->links() }}
    </div>
  </section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection