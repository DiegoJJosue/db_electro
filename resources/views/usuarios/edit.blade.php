@extends('layouts.app')
@section('content')
<div class="container">
	 <div class="row justify-content-center">
	 	<div class="col-md-8">
	 		<div class="card">

<h4 class="bg-dark text-white ">Editar Usuarios </h4>

<form action="{{route('usuarios.update',$users->use_id)}}" method="POST" >  
 @csrf

 						<div class="form-group row">
                            <label for="users" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
							<input type="text" value="{{$users->users}}" name="users" id="users">
                                @error('users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="users" class="col-md-4 col-form-label text-md-right">Apellido</label>
                            <div class="col-md-6">
					<input type="text" value="{{$users->use_apellido}}" name="use_apellido" id="use_apellido">	
                                @error('users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="users" class="col-md-4 col-form-label text-md-right">Telefono</label>
                            <div class="col-md-6">
					<input type="text" value="{{$users->use_telefono}}" name="use_telefono" id="use_telefono">
                            @error('users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>	


                        <div class="form-group row">
                            <label for="users" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
							<input type="text" value="{{$users->email}}" name="email" id="email">
                            @error('users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>	


                         <div class="form-group row">
                            <label for="users" class="col-md-4 col-form-label text-md-right">Cedula</label>
                            <div class="col-md-6">
							<input type="text" value="{{$users->use_cedula}}" name="use_cedula" id="use_cedula">
                            @error('users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>	

<button class="btn btn-success" style="margin-left: 40%;">Guardar</button>

</form>
</div>
</div>
</div>
</div>

@endsection