@extends('layouts.app')
@section('content')
<div class="container"> 
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<script src="{{asset('js/inventario.js')}}"></script>   
<form action="{{route('inventario.store')}}" method="POST" onsubmit="return validar()">

    <h4 class="bg-dark text-white ">Inventario</h4>
    <form action="{{route('inventario.store')}}" method="POST" onsubmit="return validar()">
        @csrf
 

        <div class="form-group row" > 

        <label for="pro_id" class="col-md-4 col-form-label text-md-right">Producto</label>
        <div class="col-md-6">
        <select name="pro_id" id="pro_id" class="form-control" >
        <option value="" >Elija una opcion</option> 
        @foreach($productos as $productos)
        <option value="{{$productos->pro_id}}">{{$productos->pro_nombre}}</option>
        @endforeach
                    </select>
                </div>
            </div>




         <div class="form-group row">
                            <label for="inv_fecha" class="col-md-4 col-form-label text-md-right">Fecha</label>
                            <div class="col-md-6">
                             <input id="inv_fecha"
                            name="inv_fecha" type="date" class="form-control @error('inv_fecha')
                            is-invalid  @enderror"   autofocus> @error('inv_fecha') <span
                            class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                            @enderror </div> 
                        </div>


                <div class="form-group row">
                            <label for="inv_cantidad" class="col-md-4 col-form-label text-md-right">Cantidad</label>
                            <div class="col-md-6">
                                <input id="inv_cantidad" name="inv_cantidad" type="number" class="form-control @error('inv_cantidad') is-invalid 
                        @enderror" 
                         autofocus>
                                @error('inv_cantidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                <div class="form-group row">
                            <label for="inv_precio" class="col-md-4 col-form-label text-md-right">Precio</label>
                            <div class="col-md-6">
                                <input id="inv_precio" name="inv_precio" type="number" class="form-control @error('inv_precio') is-invalid 
                        @enderror"  
                        autofocus>
                                @error('inv_precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                

        <button class="btn btn-success" style="margin-left: 55%;">Guardar</button>
        

    </form>
</div>
</div>
</div>
</div>

@endsection