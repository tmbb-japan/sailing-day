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
      <div class="album-cards"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const albumContainer = document.querySelector(".album-cards");
        const albumImages = {!! json_encode($albums->pluck('image_path')) !!};
        const numAlbums = albumImages.length;
        const translateZ = "400px";

        albumImages.forEach((imagePath, index) => {
          const angle = (360 / numAlbums) * index;
          const albumCard = document.createElement("div");
          albumCard.classList.add("album-card");
          const img = document.createElement("img");
          img.src = "{{ asset('') }}" + imagePath;
          img.alt = "Album Image";
          albumCard.appendChild(img);
          albumCard.style.transform = `translateX(-50%) translateY(-50%) rotateY(${angle}deg) translateZ(${translateZ})`;
          albumContainer.appendChild(albumCard);
        });
      });
    </script>
  </body>
</html>