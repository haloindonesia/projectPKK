@extends('layout.app')
@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
            {{--  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-height: 300px; width: 100%;">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="max-height: 300px; width: 100%;">
                  <div class="carousel-item active">
                    <img src="{{ asset ('library') }}/produk 1.jpg" class="d-block w-100" alt="Gambar 1">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset ('library') }}/produk3.jpg" class="d-block w-100" alt="Gambar 2">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset ('library') }}/produk4.jpg" class="d-block w-100" alt="Gambar 3">
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
              </div>  --}}
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-height: 400px; width: 100%;">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset ('library') }}/rafi.jpg" class="d-block w-100" style="height: 400px;" alt="Gambar 1">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset ('library') }}/hans.jpg" class="d-block w-100" style="height: 400px;" alt="Gambar 2">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset ('library') }}/ilham.jpg" class="d-block w-100" style="height: 400px;" alt="Gambar 3">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-2">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('library')}}/iphone13promax.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Iphone 13 pro max</h5>
                    <p class="card-text">New iPhone was here, with Bionic A15 is a super phone from apple.

</p>
                    <center><a href="#" class="btn btn-primary">pesan</a></center>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('library')}}/iphone13promax.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Iphone 13 pro max</h5>
                    <p class="card-text">New iPhone was here, with Bionic A15 is a super phone from apple.

</p>
                    <center><a href="{{url('produk')}}" class="btn btn-primary">pesan</a></center>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('library')}}/iphone13promax.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Iphone 13 pro max</h5>
                    <p class="card-text">New iPhone was here, with Bionic A15 is a super phone from apple.

</p>
                    <center><a href="#" class="btn btn-primary">pesan</a></center>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('library')}}/iphone13promax.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Iphone 13 pro max</h5>
                    <p class="card-text">New iPhone was here, with Bionic A15 is a super phone from apple.

</p>
                    <center><a href="#" class="btn btn-primary">pesan</a></center>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <img src="{{ asset ('library') }}/sepatu.jpg" alt="most popular" style="max-height: 150px; width: 100%;">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset ('library') }}/pemandangan.jpg" alt="most popular" style="max-height: 150px; width: 100%;">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset ('library') }}/pemandangan.jpg" alt="most popular" style="max-height: 150px; width: 100%;">
                </div>
            </div>
        </div>
        <div class="col-md-3">
                <img src="{{ asset ('library') }}/kamera.jpg" alt="most popular" style="min-height: 300px; width: 100%;">
        </div>
        <div class="col-md-3">
            <img src="{{ asset ('library') }}/kamera.jpg" alt="most popular" style="min-height: 300px; width: 100%;">
        </div>
    </div>
</div>
</div>

<br><br>

<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <img src="{{ asset ('library') }}/hans.jpg" alt="Ini Untuk Iklan" style="max-height: 100px; width: 100%;">
        </div>
    </div>
</div>
</div>
@endsection