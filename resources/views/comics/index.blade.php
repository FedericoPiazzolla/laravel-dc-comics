@extends('layouts.app')

@section('content')
  <div class="container py-5">
    <h1>Lista dei fumetti</h1>
    <div class="text-end py-5">
      <a class="btn btn-warning" href="{{ route('comics.create') }}">Create New Comic</a>
    </div>

    <table class="table table-dark table-stripped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Title</th>
          <th scope="col">Type</th>
          <th scope="col">price</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
          <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->type }}</td>
            <td>{{ $comic->price }}</td>
            <td>
              <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Details</a>
            </td>
          </tr>  
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection