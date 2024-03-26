@extends('layouts.app')

@section('title', 'comics')

@section('main-content')
  <section id="index-comics">
    <div class="container py-4">
      <h1 class="text-center">Comics list</h1>

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
            <td class="link-index-list">
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
                <button class="btn btn-primary btn-trash" data-bs-toggle="modal" data-bs-target="#delete-comic-{{ $comic->id }}-modal" type="button">
                  <i class="fa-solid fa-trash-can fa-lg" style="color: #e00b04;"></i>
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="delete-comic-{{ $comic->id }}-modal" tabindex="-1" aria-labelledby="delete-comic-{{ $comic->id }}-modal" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina comic {{ $comic->title }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Sei sicuro di voler eliminare questo fumetto? Questa azione non può essere annullata.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger">
                            Elimina
                          </button>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="paginator">
        {{ $comics->links() }}
      </div>
    </div>

    
  </section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection