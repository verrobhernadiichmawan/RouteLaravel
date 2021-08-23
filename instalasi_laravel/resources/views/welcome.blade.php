@extends('base')
@section('judul', 'Beranda')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src={{ asset('image/kata.jpg')}} class="d-block w-100" style="height: 35rem" alt="...">
      </div>
      <div class="carousel-item">
        <img src={{ asset('image/profil.png')}} class="d-block w-100" style="height: 35rem" alt="...">
      </div>
      <div class="carousel-item">
        <img src={{ asset('image/buku.jpg')}} class="d-block w-100" style="height: 35rem" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded text-center"><h4>Halaman Beranda</h1></div>
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card shadow-lg p-3 mb-5 bg-body rounded">
        <img src={{ asset('image/kartu.jpg')}} class="card-img-top" style="height: 160px" alt="...">
        <div class="card-body">
          <h5 class="card-title">Profil</h5>
          <p class="card-text">Berisi tentang Profil pembuat web</p>
          <a href="{{'/profil'}}" class="btn btn-warning">Selengkapnya         <i class="fas fa-caret-right"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-lg p-3 mb-5 bg-body rounded">
        <img src={{ asset('image/galeri.jpg')}} class="card-img-top" style="height: 165px" alt="...">
        <div class="card-body">
          <h5 class="card-title">Galeri Gambar</h5>
          <p class="card-text">Berisi Gambar Random</p>
          <a href="{{'/galeri'}}" class="btn btn-warning">Selengkapnya         <i class="fas fa-caret-right"></i></a>
        </div>
      </div>
    </div>
</div>
@endsection

@section('footer')
<div class="card text-center bg-dark text-white">
    <div class="card-header">
      <img src="{{ asset('image/fav.png')}}" alt="" srcset="" style="width: 55px; height: 55px float: right;">
    </div>
    <div class="card-body">
      <h5 class="card-title">Wijaya Ganda Prasetyo</h5>
      <p class="card-text">XII RPL 1</p>
      <a class="" href="https://www.instagram.com/wijayaganda_7/"><i class="fab fa-instagram"></i></a>
    </div>
    <div class="card-footer text-muted">
      Copyright 2021
    </div>
</div>
@endsection