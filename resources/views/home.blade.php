<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>



    </head>
    <body>
      <div class="container">
        <div class="card">
          <div class="content-card"></div>
          @foreach ($movies as $movie)
          {{ $movie-> title }}
          {{ $movie-> original_title }}
          {{ $movie-> nationality }}
          {{ $movie-> date }}
          {{ $movie-> vote }}
          <br>
          @endforeach
        </div>
      </div>
    </body>
</html>
