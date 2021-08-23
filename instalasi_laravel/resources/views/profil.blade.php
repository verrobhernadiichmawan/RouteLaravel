@extends('base')
@section('judul', 'Profil')

@section('content')

<div class="card text-center mt-3">
  <div class="shadow-lg p-3 mt-5 bg-body rounded text-center"><h4>Halaman Profil</h1></div>
    <div class="card-body text-center">
        <div class="card border-info mb-3 m-auto shadow-lg p-3 mt-5 bg-body rounded" style="max-width: 35rem;">
            <div class="card-header bg-dark text-warning">Card Profile</div>
            <div class="card-body">
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text bg-danger" id="addon-wrapping"><i class="fas fa-signature"></i></span>
                    <span class="input-group-text bg-primary col-3" id="addon-wrapping">Nama</span>
                    <input class="form-control" type="text" value="Wijaya Ganda Prasetyo" aria-label="readonly input example" readonly>
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text bg-danger" id="addon-wrapping"><i class="fas fa-laptop-code"></i></span>
                    <span class="input-group-text bg-primary col-3 text-center" id="addon-wrapping">Kelas</span>
                    <input class="form-control" type="text" value="XII RPL 1" aria-label="readonly input example" readonly>
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text bg-danger" id="addon-wrapping"><i class="fas fa-school"></i></span>
                    <span class="input-group-text bg-primary col-3" id="addon-wrapping">Sekolah</span>
                    <input class="form-control" type="text" value="SMKN 1 Purwosari" aria-label="readonly input example" readonly>
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text bg-danger" id="addon-wrapping"><i class="fas fa-hospital-alt"></i></span>
                    <span class="input-group-text bg-primary col-3" id="addon-wrapping">TTL</span>
                    <input class="form-control" type="text" value="Pasuruan, 23-04-2004" aria-label="readonly input example" readonly>
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text bg-danger" id="addon-wrapping"><i class="fas fa-map-marked-alt"></i></span>
                    <span class="input-group-text bg-primary col-3" id="addon-wrapping">Alamat</span>
                    <input class="form-control" type="text" value="Ds.Suwayuwo, Kec.Sukorejo, Kab.Pasuruan" aria-label="readonly input example" readonly>
                </div>
                <a class="" href="https://www.instagram.com/wijayaganda_7/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted bg-dark text-warning shadow-lg p-3 mt-5 bg-body rounded">
      Corona Semoga Cepat Hilang Saya Pingin Liburan
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
