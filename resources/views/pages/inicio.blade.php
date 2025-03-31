@extends('plantilla')

@section('contenido')
@include('components/navbar')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-10 mt-4">
            <div class="card" style="width: 65rem;">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://w.wallhaven.cc/full/ym/wallhaven-ymrrex.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Dragon Ball</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://w.wallhaven.cc/full/vm/wallhaven-vm319l.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Fullmetal Alchemist: Brotherhood</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://w.wallhaven.cc/full/8x/wallhaven-8xvp5y.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Naruto</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://w.wallhaven.cc/full/v9/wallhaven-v9wq6p.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Mushoku Tensei</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection