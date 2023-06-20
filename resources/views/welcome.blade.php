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
    <!-- 일단 범프오브치킨 노래 플레이어란 느낌으로 사이트를 만들자 
    1. 캐러셀로 먼저 범프오브치킨 앨범자켓들이 돌아가면서, 원하는 앨범자켓을 클릭할 경우 수록곡과 수록곡에 대한 유튜브링크를 우선 만들자. 
    2. 네비게이션 바나, 햄버거버튼을 만들어서 이 사이트에 대한 설명을 간지있는 폰트를 가져다가 작성 
    3. 그다음 카피라잇과 내가 이렇게 그들의 앨범자켓과 저작권을 가져다 사용할 경우, 광고추가나 이런걸 할 수 있는지 알아보기  -->
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