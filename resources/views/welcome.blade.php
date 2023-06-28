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
    
    <div class="stack-container">
      <div class="album-cards">
        @foreach ($albums as $key => $album)
          <div class="album-card">
            <img src="{{ asset($album->image_path) }}" alt="Album Image">
          </div>
        @endforeach
      </div>
    </div>

    <script>
      const albumCards = document.querySelectorAll('.album-card');
      const albumContainer = document.querySelector('.album-cards');
      let currentIndex = 0;

      function shuffleCards() {
        albumContainer.style.transform = `translateX(-${currentIndex * 35}px)`;

        albumCards.forEach((card, index) => {
          card.classList.remove('active');
        });

        albumCards[currentIndex].classList.add('active');
        currentIndex = (currentIndex + 1) % albumCards.length;
      }

      setInterval(shuffleCards, 500);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>