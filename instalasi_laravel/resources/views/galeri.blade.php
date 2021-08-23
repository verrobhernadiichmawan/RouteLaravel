@extends('base')
@section('judul', 'Galeri Gambar')
 
@section('content')

    <div class="card border-primary text-center">
        <div class="shadow-lg p-5 mt-5 bg-body rounded text-center"><h4>Halaman Galeri</h1></div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
                <div class="col">
                  <div class="card h-90 shadow-lg p-3 mt-3 rounded border-warning">
                    <img src={{ asset('image/profil2.jpg')}} class="card-img-top" alt="...">
                    <div class="card-footer bg-dark text-warning ">
                      <small class="text">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-90 shadow-lg p-3 mt-3 rounded border-primary">
                    <img src={{ asset('image/wijaya.jpeg')}} class="card-img-top" alt="...">
                    <div class="card-footer bg-dark text-warning">
                      <small class="text">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-90 shadow-lg p-3 mt-3 rounded border-danger">
                    <img src={{ asset('image/lukis.jpg')}} class="card-img-top" alt="...">
                    <div class="card-footer bg-dark text-warning">
                      <small class="text">Last updated 3 mins ago</small>
                    </div>
                  </div>
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
