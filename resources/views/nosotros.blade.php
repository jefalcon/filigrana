@extends('app')

@section('content')

<!--========================================================== -->
<!-- Nosotros-->
<!--========================================================== -->


<h1 class="mb-5 fs-2 text-center">Trabajamos para todo <span class="text-primary">Mexico</span> desde <span class="text-primary">Toluca</span>.</h1>
<section class="w-100">
    <div class="row w-75 mx-auto" id="servicios-fila-1">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
            <img src="{{asset('./images/samil.jpg')}}" alt="desarrollo" width="400" height="200">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">¿Quienes somos?</h3>
                <p class="px-4">Filigrana Créditos es una empresa joven, formada por un equipo
                    multidisciplinario de profesionales con amplia experiencia en el sector, que trabajan cada día cerca de ti
                    para ofrecerte soluciones que se adpaten a tus necesidades</p>
            </div>
        </div>
    </div>
</section>>

@endsection