@extends('app')

@section('content')
    <!--========================================================== -->
    <!-- Prestamos personales-->
    <!--========================================================== -->



    <div class=row>
        <h1 class="mb-5 fs-2 text-center">Los mejores <span class="text-primary">préstamos personales</span> para ti</h1>
    </div>
    <div class=row>
        <div class="col-2">

        </div>
        <div class="col-8">
            <img src="{{ asset('./images/carrusel2.jpg') }}" alt="" class="img-fluid">
            <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Vive lo que te propongas</h3>
            <ul>
                <li>Calcula tu cuota mensual en los préstamos: Elige la cantidad y calcula tu cuota mensual. ¡Estudiar tu
                    solicitud es gratis!</li>
                <li>Elige cuándo pagas tu recibo de los préstamos: Adapta el pago a tu estilo de vida. Elige cuándo pagas tu
                    recibo, el día 5 o el último día del mes.</li>
                <li>Añadir un seguro con los préstamos: Decide si quieres añadir un seguro y estar protegido de cualquier
                    imprevisto</li>
                <li>Envía tu documentación para los préstamos: Rellena tus datos y envía tu documentación</li>
                <li>Pedir un préstamo sin cambiar de banco: Y por supuesto, ¡sin cambiar de banco</li>
            </ul>
        </div>
        <div class="col-2">
        </div>
    </div>

    {{-- <form method="POST" action="{{route('alta.residencial')}}">
    <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">¿Que importe necesitas?</h3>
                <input
                    type="range" min="1" max="15000" value="10000" class="slider" id="RangeAmount" 
                    onload="Calculate()" onchange="Calculate()" oninput="Calculate()">
                <label id="amount" >
            <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">¿En cuantos meses quieres devolverlo?</h3>
            <input type="range" min="1" max="48" value="24" class="slider" id="RangeMonths" name="Months" 
                onload="Calculate()" onchange="Calculate()"  oninput="Calculate()">
            <label id="months" >
            <p>{{$plazo=Request::input('Months')}}</p>
        <h2 id="total" onload="Calculate()"></h2>
        <input type="button" class="btn btn-primary" value="Me interesa!">
</form> --}}
<form method="POST" action="{{ route('alta.residencial') }}">

    <div class=row>
        <div class="col-3">
        </div>
        <div class="col-6">
            <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Indícanos el importe que necesitas y el plazo de devolución</h3>
            
                {{ csrf_field() }}
                <label for "importe" id="amount"> Importe: 10000 Pesos</label>
                <input type="range" name="importe" min="1" max="15000" value="10000" class="slider"
                    id="RangeAmount" onchange="Calculate()">
                <br>
                <label for "plazo" id="months"> Plazo: 48 meses</label>
                <input type="range" name="plazo" min="6" max="48" value="10000" class="slider"
                    id="RangeMonths" onchange="Calculate()">
                <br>
                <label id="total" onload="Calculate()">Cuota mensual:  </label>
                <input type="input" id="cuota" name="cuota" placeholder="229.17" readonly="readonly"">
                <br>
                <br>
                <button type="submit" class="btn btn-primary"> Me interesa!</button>
                <br>
                
            
        </div>
        <div class="col-3">
        </div>
    </div>
</form>
    <script src="{{ asset('./js/calculadora.js') }}"></script>
@endsection
