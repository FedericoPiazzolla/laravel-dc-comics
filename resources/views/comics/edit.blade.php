@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="text-center p-5">Modifica il Comic: <strong class="text-warning">{{ $comic->title }}</strong></h1>

    <div class="row justify-content-center mt-5">
      <div class="col-6 my-5">

        @if ($errors->any())
            <div class="alert alert-danger">

              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>

            </div>
        @endif


        <form class="mb-5" action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
          </div>

          <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
          </div>

          <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
          </div>

          <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="5" name="description">{{ $comic->description }}</textarea>
          </div>

          <button class="btn btn-success" type="submit">Salva</button>
            
        </form>
      </div>
    </div>
  </div>
@endsection