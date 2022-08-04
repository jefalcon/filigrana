@extends('app')

@section('content')

<!--========================================================== -->
<!-- Nosotros-->
<!--========================================================== -->

<div class=row>
    <h1 class="mb-5 fs-2 text-center">Los <span class="text-primary">Arrendamientos</span> que tu empresa necesita</h1>
</div>
<div class=row>
    <div class="col-2">

    </div>
    <div class="col-8">
        <img src="{{asset('./images/carrusel3.jpg')}}" alt="" class="img-fluid">
        <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Renueva tu flota de vehiculos al mejor precio</h3>
        <ul>
            <li>Es un contrato donde se otorga el uso y goce de un activo durante un periodo determindado y rentas fijas como contraprestación de este servicio y al final del plazo el arrendatario tiene las opciones de prorrogar el plazo del arrendamiento con una renta inferior a la devolución de los activos</li>
            <li>Con nuestro producto de Arrendamiento podrás hacer uso de los mejores activos productivos para tu empresa, pagando una renta mensual deducible de impuestos durante el plazo del contrato. Al finalizar el plazo, tendrás como opciones:</li>
            <ul>
                <li>Comprar el equipo al valor residual acordado</li>
                <li>Extender el plazo del arrendamiento 12 meses adicionales</li>
                <li>Devolver el equipo para reemplazarlo por uno de mejor tecnología</li>
            </ul>
            
        </ul>
    </div>
    <div class="col-2">
    </div>
</div>

@endsection