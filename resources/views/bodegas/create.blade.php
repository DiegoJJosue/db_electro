@extends('layouts.app') 
@section('content')
<div class="container"> 
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<script src="{{asset('js/bodegas.js')}}"></script>   
<form action="{{route('bodegas.store')}}" method="POST" onsubmit="return validar()">

	<h4 class="bg-dark text-white ">BODEGAS</h4>
	<!-- <form action="{{route('usuarios.store')}}" method="POST" onsubmit="return validar()"> -->


        @csrf

         <div class="form-group row">
                         <label for="bod_cantida" class="col-md-4 col-form-label text-md-right">Cantidad</label>
                            <div class="col-md-6">
                             <input id="bod_cantida"
                            name="bod_cantida" type="number" class="form-control @error('bod_cantida')
                            is-invalid  @enderror"   autofocus> @error('bod_cantida') <span
                            class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                            @enderror </div> 
                        </div>

          <div class="form-group row">
           <label for="bod_tipo" class="col-md-4 col-form-label text-md-right">Tipo</label>
              <div class="col-md-6">
               <input id="bod_tipo"
              name="bod_tipo" type="text" class="form-control @error('bod_tipo')
              is-invalid  @enderror"   autofocus> @error('bod_tipo') <span
              class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
              @enderror </div> 
          </div>
                

        <button class="btn btn-success" style="margin-left: 55%;">Guardar</button>
        

    </form>
</div>
</div>
</div>
</div>

@endsection