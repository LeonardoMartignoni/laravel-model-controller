<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel 9 + Bootstrap Template</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>
  <div class="container">
    <div class="row row-cols-5 g-4">
      @forelse ($movies as $movie)
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->date }} - {{ $movie->vote }} </h6>
            <p class="card-text">{{ $movie->original_title }}</p>
            {{-- <a href="#" class="card-link">Card link</a> --}}
          </div>
        </div>

      @empty
        <p>No movies found</p>
      @endforelse
    </div>
  </div>
</body>

</html>
