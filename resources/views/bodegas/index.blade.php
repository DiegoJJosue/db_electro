@extends('layouts.app') 
@section('content')
<div class="container">
	<thead class="table-dark">
		
		
<h2 class="bg-dark text-white">BODEGAS</h2>
<a href="{{route('bodegas.create')}}" class="btn btn-primary">Nuevo</a>

<form >
   <!--  <button class="btn btn-danger "value="btn_pdf" name="btn_pdf" >PDF</button> -->

</form>

<table class="table table-striped " >
	<th>#</th>

	<th>Numero de la Bodega</th>
	<th>Cantidad</th>
	<th>Tipo</th>
	@foreach($bodegas as $bodegas)
	<tr>
		<td>{{$loop->iteration}}</td>
		
		<td>{{$bodegas->bod_cantida}}</td>
		<td>{{$bodegas->bod_tipo}}</td>

	</tr>
	@endforeach
</table>
	</thead>
	</div>
</div>
@endsection  