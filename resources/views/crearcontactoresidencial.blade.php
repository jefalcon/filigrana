@extends('app')

@section('content')

<!--========================================================== -->
<!-- Solicitud Crédito Personal-->
<!--========================================================== -->



<h2 class="mb-5 fs-2 text-center">Introduce tus datos personales</h2>

<form method="POST" action="{{ route('alta.solicitud.residencial') }}">>
    {{ csrf_field() }}
    <div class="form-row">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre...">
        <br>
        <label for="fx_nacimiento">Fecha de nacimiento</label>
        <input type="text" class="form-control" id="fx_nacimiento" name="fx_nacimiento" placeholder="DD/MM/AAAA">
        <br>
        <label for="documento">Documento</label>
        <input type="text" class="form-control" id="documento" name="documento" placeholder="Intoduce tu número de documento">
        <br>
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        <br>
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Número de celular">
        <br>
        <label for="ingresos">Ingresos anuales</label>
        <input type="text" class="form-control" id="ingresos" name="ingresos" placeholder="Tus ingresos del ultimo año...">
        <br>
        <label for="antiguedad">Antigüedad en tu empresa</label>
        <input type="text" class="form-control" id="antiguedad" name="antiguedad" placeholder="Años en tu trabajo avtual">
        <br>
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" id="antiguedad" name="antiguedad" placeholder="El crédito lo quiero para...">
        <br>
        <label for="importe">Importe solicitado</label>
        <input type="text" class="form-control" id="importe" name="importe" 
                 readonly="readonly" placeholder="{{request()->get('importe')}}">
        <br>
        <label for="plazo">Plazo de devolución</label>
        <input type="text" class="form-control" id="plazo" name="plazo" 
                 readonly="readonly" placeholder="{{request()->get('plazo')}}">
        <br>
        <label for="cuota">Cuota mensual</label>
        <input type="text" class="form-control" id="cuota" name="cuota" 
                 readonly="readonly" placeholder="{{request()->get('cuota')}}">
        <br>

    </div>
</div>
    
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>


@endsection