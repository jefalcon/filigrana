@extends('app')

@section('content')

<!--========================================================== -->
<!-- SLIDER DE IMAGENES-->
<!--========================================================== -->
<div class="row">
    <div class="col-1">
    </div>
    <div class="col-10">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{asset('./images/carrusel1.jpg')}}" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display">Filigrana Créditos</h1>
                        <p>Los créditos que mejor se adaptan a tus necesidades a los mejores tipos de interés del mercado</p>
                    </div>

                </div>


                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{asset('./images/carrusel2.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display">Créditos personales</h1>
                        <p>La financiación que necesitas para realizar tus proyectos</p>
                    </div>
                </div>


                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{asset('./images/carrusel3.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display">Arrendamientos</h1>
                        <p>La ayuda que necesitas para que tu empresa siga creciendo</p>
                    </div>
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-1">
    </div>
</div>



@endsection