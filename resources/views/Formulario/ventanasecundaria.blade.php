@extends('Layouts.App')
@section('header-title')
Hola, Bienvenido a la Edición!
@endsection
@section('content')
<div class="row">

						<div class="col-12 col-xl-12">
						<br>
						<br>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Registro de Personas</h5>
									<h6 class="card-subtitle text-muted">Tiene un Plazo de 30 Días para Reclamar su Respectiva Factura.</h6>
								</div>
								<div class="card-body">
									<form method = "post" action = "{{url('Persona/Edicion'.$personas->id)}}"> 
										@csrf
										<div class="mb-3">
											<label class="form-label">Nombre</label>
											<input type="text" name= "nombre_person" class="form-control" placeholder="Nombre de la Persona">
										</div>
										<div class="mb-3">
											<label class="form-label">Apellido</label>
											<input type="text" class="form-control" name="apellido_person" placeholder="Apellido de la Persona">
										</div>
                                        <div class="mb-3">
											<label class="form-label" value='{{$personas->Cedula}}'>Cedula</label>
											<input type="text" class="form-control" value="{{$personas->Cedula}}" name="cedula_person" placeholder="Cédula o Pasaporte">
										</div>
                                        <div class="mb-3">
											<label class="form-label">Avatar</label>
											<input type="text" class="form-control" name="avatar_person" placeholder="Formato Permito: .png">
										</div>
										<button type="submit" class="btn btn-primary">Actualizar a Persona</button>
									</form>
								</div>
							</div>
						</div>

						<div class="container-fluid">

						
</div>

@endsection