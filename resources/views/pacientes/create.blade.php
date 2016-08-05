@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
			<h1>Nuevo Paciente</h1>
				<form enctype="multipart/form-data" action="{{ action('PacienteController@store') }}" method="POST" role="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<p class="lead">Datos del Paciente.</p>
					<hr>
					<div class="form-group row">
						<div class="col-xs-2">
							<label for="nombre">nombre</label>
							<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
						</div>
						<div class="col-xs-2">
							<label for="apellido">apellido</label>
							<input type="text" class="form-control" name="apellido" id="apellido" placeholder="apellido">
						</div>
						<div class="col-xs-2">
							<label for="patente">DNI</label>
							<input type="text" maxlength="6" class="form-control" name="DNI" id="DNI" placeholder="00000000">
						</div>
						<div class="col-xs-2">
							<label for="fecha_nacimiento">fecha_nacimiento</label>
							<input type="text" maxlength="4" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" >
						</div>
						<div class="col-xs-2">
							<label for="lugar_nacimiento">lugar_nacimiento</label>
							<input type="lugar_nacimiento" maxlength="4" class="form-control" name="lugar_nacimiento" id="lugar_nacimiento" placeholder="">
						</div>
						<div class="col-xs-2">
							<label for="obrasocial">Obra Social</label>
							<select type="text" class="form-control" name="obrasocial" id="obrasocial" placeholder="obrasocial">
								<option value="OSDE">OSDE</option>
								<option value="OSECAC">OSECAC</option>
								<option value="OSPRERA">OSPRERA</option>
								<option value="SWISS MEDICAL">SWISS MEDICAL</option>
								<option value="IPAUSS">IPAUSS</option>
								<option value="TVSALUD">TVSALUD</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						
						<div class="col-xs-3">
							<label for="domicilio">domicilio</label>
							<input type="text" class="form-control" name="domicilio" id="domicilio" >
						</div>
						<div class="col-xs-2">
							<label for="celular">celular</label>
							<input type="text" maxlength="6" class="form-control" name="celular" id="celular" >
						</div>
						<div class="col-xs-2">
							<label for="telefono">telefono</label>
							<input type="text" maxlength="4" class="form-control" name="telefono" id="telefono" >
						</div>
						<div class="col-xs-3">
							<label for="email">email</label>
							<input type="email" maxlength="4" class="form-control" name="email" id="email" >
						</div>
						<div class="col-xs-2">
							<label for="foto">foto</label>
							<input type="file" maxlength="4" class="form-control" name="foto" id="foto" >
						</div>
					</div>
					<div class="form-group row">
						
						<div class="col-xs-2">
							<label for="escolaridad">escolaridad</label>
							<input type="text" class="form-control" name="escolaridad" id="escolaridad" >
						</div>
						<div class="col-xs-2">
							<label for="motivos">motivos</label>
							<input type="text" class="form-control" name="motivos" id="motivos" >
						</div>
						<div class="col-xs-2">
							<label for="diagnostico">diagnostico</label>
							<input type="text" class="form-control" name="diagnostico" id="diagnostico" >
						</div>
						<div class="col-xs-2">
							<label for="certificado">certificado</label>
							<input type="email" class="form-control" name="certificado" id="certificado" >
						</div>
						<div class="col-xs-2">
							<label for="discapacidad">discapacidad</label>
							<input type="text" class="form-control" name="discapacidad" id="discapacidad" >
						</div>
						<div class="col-xs-2">
							<label for="medicacion">medicacion</label>
							<input type="text" class="form-control" name="medicacion" id="medicacion" >
						</div>
					</div>

					<div class="form-group row">
						<div class="col-xs-1">
							<div class="checkbox">
							    <label class="checkbox-inline">
							    </label>
							      <input type="checkbox"> PS
								<input type="text" width="20%" class="form-control" name="medicacion" id="medicacion" placeholder="Frecuencia">
						  	</div>
						</div>
					</div>
					

				<p class="lead">Datos del Papa.</p>
				<hr>
					<div class="form-group row">
						<div class="col-xs-2">
							<label for="papa_nombre">papa_nombre</label>
							<input type="text" class="form-control" name="papa_nombre" id="papa_nombre" placeholder="papa_Nombre">
						</div>
						<div class="col-xs-2">
							<label for="papa_apellido">papa_apellido</label>
							<input type="text" class="form-control" name="papa_apellido" id="papa_apellido" placeholder="papa_apellido">
						</div>
						<div class="col-xs-2">
							<label for="papa_dni">DNI</label>
							<input type="text" maxlength="6" class="form-control" name="papa_dni" id="papa_dni" placeholder="papa_dni">
						</div>
						<div class="col-xs-2">
							<label for="papa_fecha_nacimiento">papa_fecha_nacimiento</label>
							<input type="text" maxlength="4" class="form-control" name="papa_fecha_nacimiento" id="papa_fecha_nacimiento" >
						</div>
						<div class="col-xs-2">
							<label for="papa_lugar_nacimiento">papa_lugar_nacimiento</label>
							<input type="text" maxlength="4" class="form-control" name="papa_lugar_nacimiento" id="papa_lugar_nacimiento" placeholder="">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xs-3">
							<label for="papa_direccion">papa_direccion</label>
							<input type="text" maxlength="4" class="form-control" name="papa_direccion" id="papa_direccion" placeholder="">
						</div>
						<div class="col-xs-2">
							<label for="papa_telefono">papa_telefono</label>
							<input type="text" maxlength="4" class="form-control" name="papa_telefono" id="papa_telefono" placeholder="">
						</div>
						<div class="col-xs-2">
							<label for="papa_ocupacion">papa_ocupacion</label>
							<input type="text" maxlength="4" class="form-control" name="papa_ocupacion" id="papa_ocupacion" placeholder="">
						</div>
						<div class="col-xs-2">
							<label for="papa_lugar_trabajo">papa_lugar_trabajo</label>
							<input type="text" maxlength="4" class="form-control" name="papa_lugar_trabajo" id="papa_lugar_trabajo" placeholder="">
						</div>
						<div class="col-xs-3">
							<label for="papa_antecedentes">papa_antecedentes</label>
							<input type="text" maxlength="4" class="form-control" name="papa_antecedentes" id="papa_antecedentes" placeholder="">
						</div>
					</div>

					


				<p class="lead">Datos de la Mama.</p>
				<hr>
					<div class="form-group row">
						<div class="col-xs-2">
							<label for="mama_nombre">mama_nombre</label>
							<input type="text" class="form-control" name="mama_nombre" id="mama_nombre" placeholder="mama_Nombre">
						</div>
						<div class="col-xs-2">
							<label for="mama_apellido">mama_apellido</label>
							<input type="text" class="form-control" name="mama_apellido" id="mama_apellido" placeholder="mama_apellido">
						</div>
						<div class="col-xs-2">
							<label for="mama_dni">DNI</label>
							<input type="text" maxlength="6" class="form-control" name="mama_dni" id="mama_dni" placeholder="mama_dni">
						</div>
						<div class="col-xs-2">
							<label for="mama_fecha_nacimiento">mama_fecha_nacimiento</label>
							<input type="text" class="form-control" name="mama_fecha_nacimiento" id="mama_fecha_nacimiento" >
						</div>
						<div class="col-xs-2">
							<label for="mama_lugar_nacimiento">mama_lugar_nacimiento</label>
							<input type="text" class="form-control" name="mama_lugar_nacimiento" id="mama_lugar_nacimiento" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xs-3">
							<label for="mama_direccion">mama_direccion</label>
							<input type="text" class="form-control" name="mama_direccion" id="mama_direccion" >
						</div>
						<div class="col-xs-2">
							<label for="mama_telefono">mama_telefono</label>
							<input type="text" class="form-control" name="mama_telefono" id="mama_telefono" >
						</div>
						<div class="col-xs-2">
							<label for="mama_ocupacion">mama_ocupacion</label>
							<input type="text" class="form-control" name="mama_ocupacion" id="mama_ocupacion" >
						</div>
						<div class="col-xs-2">
							<label for="mama_lugar_trabajo">mama_lugar_trabajo</label>
							<input type="text" class="form-control" name="mama_lugar_trabajo" id="mama_lugar_trabajo" >
						</div>
						<div class="col-xs-3">
							<label for="mama_antecedentes">mama_antecedentes</label>
							<input type="text" class="form-control" name="mama_antecedentes" id="mama_antecedentes" >
						</div>
					</div>

				<div class="form-group row">
					<div class="col-xs-12">
						<label for="observaciones">Observaciones</label>
						<textarea maxlength="200" class="form-control" id="observaciones" name="observaciones" placeholder="Escriba aqui las observaciones o comentarios" rows="1"></textarea>
					</div><!-- /.col-xs-12 -->
				</div><!-- /.form-group -->

			<div class="btn-group btn-group-justified" role="group" aria-label="...">
		  <div class="btn-group" role="group">
		    <button type="cancel" class="btn btn-default">Cancelar</button>
		  </div>
		  <div class="btn-group" role="group">
		    <button type="submit" class="btn btn-default btn-success">Guardar</button>
		  </div>
		</div>
	</form>
	
		</div><!-- /.col-xs-12 -->
    </div><!-- /.row -->
</div><!-- /.row -->
@endsection
