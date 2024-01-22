@extends('layouts.app')

@section('content')
  <div class="container py-5">
    <h1>Lista dei fumetti</h1>

    @if (Session::has('message'))
      <div class="alert alert-warning my-5">
        {{ Session::get('message') }}
      </div>
    @endif

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
            <td class="text-center">
              <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                <i class="fa-solid fa-eye"></i>
              </a>
              <a class="btn btn-warning mx-3" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                <i class="fa-solid fa-pencil"></i>
              </a>

              <form id="deleteForm" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" class="d-inline-block" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger btn-delete" type="submit" data-title="{{ $comic->title }}">
                  <i class="fa-solid fa-trash-can"></i>
                </button>
              </form>

            </td>
          </tr>  
        @endforeach
        
      </tbody>
    </table>

    @include('partials.delete-modal')

  </div>
@endsection