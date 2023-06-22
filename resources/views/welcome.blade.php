<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite('resources/sass/styles.scss')
    <title>sailing day</title>
  </head>
  <body>
    <div class="container">
      <div class="carousel">
        <figure>
          <img src="{{ asset('images/karuma.png') }}" alt="카르마">
          <img src="{{ asset('images/K.png') }}" alt="케이">
          <img src="{{ asset('images/ray.png') }}" alt="레이">
          <img src="{{ asset('images/jupiter.png') }}" alt="주피터">
          <img src="{{ asset('images/tensai.png') }}" alt="천체">
          <img src="{{ asset('images/time.png') }}" alt="타임">
          <img src="{{ asset('images/aurora.png') }}" alt="오로라">
          <img src="{{ asset('images/souvenir.png') }}" alt="수베니어">
        </figure>
      </div>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>