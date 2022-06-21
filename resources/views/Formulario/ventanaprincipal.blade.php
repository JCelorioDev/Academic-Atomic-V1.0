@extends('Layouts.App')
@section('header-title')
Hola, Bienvenido a Academic Atomic!
@endsection
@section('content')
<div class="row">

						<div class="col-12 col-xl-12">
						<br>
						<br>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Registro</h5>
									<h6 class="card-subtitle text-muted">Por Favor Verifica que la Información que Ingresaste Sea Verdadera.</h6>
								</div>
								<div class="card-body">
									<form method = "post" action = "{{url('Persona/Registrar')}}"> 
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
											<label class="form-label">Cedula</label>
											<input type="text" class="form-control" name="cedula_person" placeholder="Cédula o Pasaporte">
										</div>
                                        <div class="mb-3">
											<label class="form-label">Avatar</label>
											<input type="text" class="form-control" name="avatar_person" placeholder="Formato Permito: .png">
										</div>
										<button type="submit" class="btn btn-primary">Registrar a Persona</button>
									</form>
								</div>
							</div>
						</div>

						<div class="container-fluid">

						
</div>

<div class="row" style="position: relative; left: 300px;">
	<div class="col-12">
		<div class="card" style="border: rgb(55, 255, 0) solid 2px">
			<div class="card-header">
				<h5 class="card-title">Lista de Personas</h5>
				<h6 class="card-subtitle text-muted">Para mayor información ingresa a la documentación de equipos de la Espam MFL
					    <a href="http://www.espam.edu.ec/web/universidad/calendario.aspx" target="_blank"
						>Aquí</a>.</h6>
			</div>
			<div class="card-body">
				<table id="datatables-reponsive" class="table table-striped" style="width:100%">
					<thead style="background: lightcoral">
						<tr>
							<th>Nombre Producto</th>
							<th>Apellido</th>
                            <th>Cedula</th>
							<th>Avatar</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($P as $item)
						<tr>
							<td>{{$item->Nombre}}</td>
							<td>{{$item->Apellido}}</td>
                            <td>{{$item->Cedula}}</td>
							<td>{{$item->Avatar}}</td>
					        <td>
								<a href="{{url('Edicion'.$item->id)}}"><i class="align-middle fa fa-edit"></i></a>
								<a href="#"><i class="align-middle fa fa-trash"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection