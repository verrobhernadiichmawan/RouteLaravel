<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('judul')</title>

</head>
<body>
    <ul class="nav nav-tabs justify-content-center bg-dark fixed-top">
      <div class="gambar">
        <img src="{{ asset('image/fav.png')}}" alt="" srcset="" style="width: 55px; height: 55px float: left;">
      </div>
      
      <li class="nav-item">
        <a class="nav-link text-danger" aria-current="page" href="{{'/'}}"><i class="fas fa-tachometer-alt p-3"></i>Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="{{'/profil'}}"><i class="fas fa-id-card p-3"></i>Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="{{'/galeri'}}"><i class="fas fa-image p-3"></i>Galeri Gambar</a>
      </li>
    </ul>
  
</body>
</html>
@yield('content')
@yield('footer')

    


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8de1128d76.js" crossorigin="anonymous"></script>