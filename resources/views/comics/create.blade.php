@extends('layouts.app')

@section('title', 'create')

@section('main-content')

   <section>
       <div class="container">
        <h1>Crea nuava pasta</h1>
           <form action="{{ route('comics.store') }}" method="POST">
               @csrf
               <div class="row g-2">
                   <div class="col-12">
                       <label class="form-lable" for="title">Title</label>
                       <input class="form-control" type="text" name="title" id="title"/>
                   </div>
                   <div class="col-12">
                       <label class="form-lable" for="thumb">thumb</label>
                       <input class="form-control" type="url" name="thumb" id="thumb"/>
                   </div>
                   <div class="col-12">
                       <label class="form-lable" for="price">price</label>
                       <input class="form-control" type="number" name="price" id="price" />
                   </div>
                   <div class="col-12">
                       <label class="form-lable" for="series">series</label>
                       <input class="form-control" type="text" id="series" name="series" />
                   </div>
                   <div class="col-12">
                       <label class="form-lable" for="sale_date">sale date</label>
                       <input class="form-control" type="date" id="sale_date" name="sale_date" />
                   </div>
                   <div class="col-12">
                       <label class="form-lable" for="type">type</label>
                       <input class="form-control" type="text" name="type" id="type"/>
                   </div>
                   <div class="col-12">
                       <label class="form-lable" for="description">description</label>
                       <textarea class="form-control" name="description" id="description"></textarea>
                   </div>
               </div>

               <button class="btn btn-success mt-3">Inserisci</button>
           </form>
       </div>
   </section>
    
@endsection
