@extends('plantilla')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-10 mt-4">
        <div class="card" style="width: 50rem;">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://sm.ign.com/ign_latam/screenshot/default/03333_ygqy.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sheng Long</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/92294e69-f322-49b0-90a4-39a9925c67d2/dg7dvp1-83408b6c-6761-4eb2-a6f3-6f4a5b440d96.png/v1/fill/w_1280,h_1024,q_80,strp/ultimate_shen_long_by_brytos_dg7dvp1-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzkyMjk0ZTY5LWYzMjItNDliMC05MGE0LTM5YTk5MjVjNjdkMlwvZGc3ZHZwMS04MzQwOGI2Yy02NzYxLTRlYjItYTZmMy02ZjRhNWI0NDBkOTYucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.ZxLVFcw7_HlBNxBX8PjhfTiWwzOmR7h5wJ5nIebWI3Y" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sheng Long Definitivo</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://animenew.com.br/wp-content/uploads/2025/02/Dragon-Ball-Daima-Shenlong-Supremo-1280x720.webp" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Dragon del mundo demoniaco</h5>
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
@endsection