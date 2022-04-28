@extends('layouts.app') 
@section('content')
<div class="container">
	 <div class="row justify-content-center">
	 	<div class="col-md-8">
	 		<div class="card">

<h4 class="bg-dark text-white ">Editar Bodegas </h4>

<form action="{{route('bodegas.update',$bodegas->bod_id)}}" method="POST" >  
 @csrf

 						<div class="form-group row">
                            <label for="bod_cantida" class="col-md-4 col-form-label text-md-right">Cantidad</label>
                            <div class="col-md-6">
							<input type="number" value="{{$Bod->bod_cantida}}" name="bod_cantida" id="bod_cantida">
                                @error('bod_cantida')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bob_tipo" class="col-md-4 col-form-label text-md-right">Tipo</label>
                            <div class="col-md-6">
					<input type="text" value="{{$Bod->bob_tipo}}" name="bod_tipo" id="bod_tipo">	
                                @error('bob_tipo')
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