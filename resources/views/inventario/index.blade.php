@extends('layouts.app')
@section('content')
<div class="container">
	<thead class="table-dark">
		
		
<h2 class="bg-dark text-white">Lista de Inventario</h2>
<a href="{{route('inventario.create')}}" class="btn btn-primary">Nuevo</a>

<form >
   <!--  <button class="btn btn-danger "value="btn_pdf" name="btn_pdf" >PDF</button> -->

</form>

<table class="table table-striped " >
	<th>#</th>

	<th>Nombre del producto</th>
	<th>Fecha</th>
	<th>Cantidad</th>
	<th>Precio</th>
	<th>Bodega</th>
	<th>Provedor</th>
	<th>Ventas</th>
	@foreach($inventario as $inventario)
	<tr>
		<td>{{$loop->iteration}}</td>
		
		<td>{{$inventario->pro_nombre}}</td>
		<td>{{$inventario->inv_fecha}}</td>
		<td>{{$inventario->inv_cantidad}}</td>
		<td>{{$inventario->inv_precio}}</td>

	</tr>
	@endforeach
</table>
	</thead>
	</div>
</div>
@endsection  