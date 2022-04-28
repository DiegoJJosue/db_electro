@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/productos.js')}}"></script>
	<h4 class="bg-dark text-white ">Tipo de Productos</h4>
	<form action="{{route('productos.store')}}" method="POST" onsubmit="return validar()" >
		@csrf

		<div class="form-group row">
                            <label for="users" class="col-md-4 col-form-label text-md-right">Tipo de Productos</label>
                            <div class="col-md-6">
							<input type="text" name="pro_nombre" id="pro_nombre" >
                                @error('users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


        <div class="form-group row">
                            <label for="users" class="col-md-4 col-form-label text-md-right">Codigo del Producto </label>
                            <div class="col-md-6">
							<input type="number" name="pro_codigo" id="pro_codigo" >
                                @error('users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

		<button class="btn btn-success" style="margin-left: 35%;">Guardar</button>
		

	</form>

		</div>
	</div>
</div>


@endsection