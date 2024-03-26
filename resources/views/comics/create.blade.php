@extends('layouts.app')

@section('title', 'create')

@section('main-content')

   <section>
       <div class="container">
        <h1 class="text-center">Inserisci un nuovo fumetto</h1>
        <a href="{{ route('comics.index')}}" class="btn btn-primary mb-3">torna alla lista</a>
           <form action="{{ route('comics.store') }}" method="POST">
               @csrf
               <div class="row g-2">
                   <div class="col-4">
                       <label class="form-lable" for="title">TITLE</label>
                       <input class="form-control" type="text" name="title" id="title"/>
                   </div>
                   <div class="col-4">
                       <label class="form-lable" for="thumb">THUMB</label>
                       <input class="form-control" type="url" name="thumb" id="thumb"/>
                   </div>
                   <div class="col-4">
                       <label class="form-lable" for="price">PRICE</label>
                       <input class="form-control" type="text" name="price" id="price" />
                   </div>
                   <div class="col-4">
                       <label class="form-lable" for="series">SERIES</label>
                       <input class="form-control" type="text" id="series" name="series" />
                   </div>
                   <div class="col-4">
                       <label class="form-lable" for="sale_date">SALE DATE</label>
                       <input class="form-control" type="date" id="sale_date" name="sale_date" />
                   </div>
                   <div class="col-4">
                       <label class="form-lable" for="type">TYPE</label>
                       <input class="form-control" type="text" name="type" id="type"/>
                   </div>
                   <div class="col-12">
                       <label class="form-lable" for="description">DESCRITION</label>
                       <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                   </div>
               </div>

               <button class="btn btn-success mt-3">Inserisci</button>
           </form>
       </div>
   </section>
    
@endsection
