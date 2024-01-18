@extends('layouts.app')

@section('content')
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-4">
          <div class="card ">
            <h1>{{ $comic->title }}</h1>
              <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

              <div class="">
                <p>{{ $comic->description }}</p>

                <ul class="list-unstyled">
                  <li>
                    <strong>Price:</strong>
                    {{ $comic->price }}
                  </li>
                  <li>
                    <strong>Series:</strong>
                    {{ $comic->series }}
                  </li>
                  <li>
                    <strong>Sale Date:</strong>
                    {{ $comic->sale_date }}
                  </li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      
      
    </div>
@endsection