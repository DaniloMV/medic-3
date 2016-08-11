@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 ">
            <div class="panel panel-default">

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="lead ">
                                <th class="text-center" colspan="2">
                                <img class="img-circle" width="40%" src="../uploads/pacientes/{{$p->foto}}" alt=""><br>
                                	{{ $p->apellido .', ' . $p->nombre}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> <td class="small text-right">Obra Social</td>   <td>{{ $p->obrasocial}}</td> </tr>
                            <tr> <td class="small text-right">Edad</td>          <td>{{ $p->edad}}</td></tr>
                            <tr> <td class="small text-right">DNI</td>           <td>{{ $p->dni}}</td></tr>
                            <tr> <td class="small text-right">Domicilio</td>     <td>{{ $p->domicilio}}</td></tr>
                            <tr> <td class="small text-right">Celular</td>       <td>{{ $p->celular}}</td></tr>
                            <tr> <td class="small text-right">Telefono</td>       <td>{{ $p->telefono}}</td></tr>
                            <tr> <td class="small text-right">Discp.</td>       <td>{{ $p->discapacidad}}</td></tr>
                            <tr> <td class="small text-right">Nombre Padre</td>       <td>{{ $p->nombre_padre}}</td></tr>
                            <tr> <td class="small text-right">Nombre Madre</td>       <td>{{ $p->nombre_madre}}</td></tr>
                            <tr> <td class="small text-right">Telefono</td>       <td>{{ $p->telefono}}</td></tr>
                            <tr> <td class="small text-right">Mail</td>       <td>{{ $p->email}}</td></tr>
                            <tr> <td class="small text-right">Foto</td>       <td>{{ $p->foto}}</td></tr>
                            <tr> <td class="small text-right">Obsv.</td>       <td>{{ $p->observaciones}}</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5 small">
            <div class="panel panel-default ">
				<div class="panel-heading" data-toggle="collapse" data-target="#table-antecedentes" aria-expanded="false" aria-controls="table-antecedentes">
					<h3 class="panel-title">Antecedente <span class="label label-info label-sm pull-right">{{$antecedentes->count()}}</span></h3>
				</div>
				<section class="collapse"  id="table-antecedentes">
				@foreach ($antecedentes as $a)
	                <table class="table  table-hover " >
	                	<thead> <tr> <th colspan="2">{{ $a->fecha}}</th> </tr> </thead>
	                    <tbody> <tr> <td>{{$a->titulo}}</td> <td>{{ $a->resumen}}</td></tr> </tbody>
	                </table>
                @endforeach
				</section>
            </div>

            <div class="panel panel-default">
				<div class="panel-heading" data-toggle="collapse" data-target="#table-informes" aria-expanded="false" aria-controls="table-antecedentes">
					<h3 class="panel-title">Informes <span class="label label-info label-sm pull-right">{{$informes->count()}}</span></h3>
				</div>
				<section class="collapse"  id="table-informes">
					@foreach ($informes as $a)
		                <table class="table  table-hover">
		            		<thead> <tr> <th colspan="3">{{ $a->fecha}}</th> </tr> </thead>
		                    <tbody> <tr> <td>{{$a->titulo}}</td> <td>{{ $a->resumen}}</td><td ><img class="img-thumbnail" src="../uploads/informes/{{ $a->foto}}" alt=""></td></tr> </tbody>
		                </table>
	                @endforeach
				</section>
            </div>

            <div class="panel panel-default">
				<div class="panel-heading" data-toggle="collapse" data-target="#table-turnos" aria-expanded="false" aria-controls="table-antecedentes">
					<h3 class="panel-title">Turnos <span class="label label-info label-sm pull-right">{{$turnos->count()}}</span></h3>
				</div>
				<section class="collapse"  id="table-turnos">
					@foreach ($turnos as $a)
		                <table class="table  table-hover">
		            		<thead> <tr> <th>Fecha y Hora</th><th>Repite</th><th>Observaciones</th> </tr> </thead>
		                    <tbody> <tr> <td>{{$a->fechahora}}</td> <td>{{ $a->repite}}</td><td >{{ $a->observaciones}}</td></tr> </tbody>
		                </table>
	                @endforeach
				</section>
            </div>

            <div class="panel panel-default">
				<div class="panel-heading" data-toggle="collapse" data-target="#table-evoluciones" aria-expanded="false" aria-controls="table-antecedentes">
					<h3 class="panel-title">Evoluciones <span class="label label-info label-sm pull-right">{{$evoluciones->count()}}</span></h3>
				</div>
				<section class="collapse"  id="table-evoluciones">
					@foreach ($evoluciones as $a)
		                <table class="table  table-hover">
		            		<thead> <tr> <th colspan="3">{{ $a->fecha}}</th> </tr> </thead>
		                    <tbody> <tr> <td>{{$a->titulo}}</td> <td>{{ $a->resumen}}</td><td >{{ $a->foto}}</td></tr> </tbody>
		                </table>
	                @endforeach
				</section>
            </div>
        </div>

        <div class="col-md-4 small text-center">
            <div class="panel panel-default" data-toggle="collapse" data-target="#table-test-vocales" aria-expanded="false" aria-controls="table-antecedentes">
				<div class="panel-heading">
					<h3 class="panel-title">Test Vocales <span class="label label-info label-sm pull-right">{{$test_vocales->count()}}</span></h3>
				</div>
				<section class="collapse"  id="table-test-vocales">
					@foreach ($test_vocales as $a)
		                <table class="table  table-hover table-bordered">
		                	<thead> <tr> <th colspan="6">{{ $a->fechahora}}</th><th class="text-right"># {{ $a->id}}</th> </tr> </thead>
		                    <tbody> 
			                    	<tr> 
			                    		<td width="14%">a</td> 
			                    		<td width="14%">e</td> 
			                    		<td width="14%">i</td> 
			                    		<td width="14%">o</td> 
			                    		<td width="14%">u</td> 
			                    		<td width="14%">s</td> 
			                    		<td width="14%">r</td>
			                    	</tr>
				                    <tr> 
				                    	<td class="text-vertical">{{$a->letra_a}}</td> 
				                    	<td class="text-vertical">{{$a->letra_e}}</td> 
				                    	<td class="text-vertical">{{$a->letra_i}}</td> 
				                    	<td class="text-vertical">{{$a->letra_o}}</td>
				                    	<td class="text-vertical">{{$a->letra_u}}</td>
				                    	<td class="text-vertical">{{$a->letra_s}}</td>
				                    	<td class="text-vertical">{{$a->letra_r}}</td>
				                    </tr> 
			                    <tr> <td colspan="7" class="text-left">{{ $a->observaciones}}</td></tr> 
		                    </tbody>
		                </table>
	                @endforeach
				</section>
            </div>

            <div class="panel panel-default">
				<div class="panel-heading" data-toggle="collapse" data-target="#table-test-dictado" aria-expanded="false" aria-controls="table-antecedentes">
					<h3 class="panel-title">Test Dictado <span class="label label-info label-sm pull-right">{{$test_dictado->count()}}</span></h3>
				</div>
				<section class="collapse"  id="table-test-dictado">
					@foreach ($test_dictado as $a)
		                <table class="table  table-hover table-bordered">
		                	<thead> <tr> <th colspan="3">{{ $a->fechahora}}</th><th class="text-right"># {{ $a->id}}</th> </tr> </thead>
		                    <tbody> 
		                    	<tr> 
		                    		<td width="25%">Oracion 1</td> 
		                    		<td width="25%">Oracion 2</td> 
		                    		<td width="25%">Oracion 3</td> 
		                    		<td width="25%">Oracion 4</td> 
		                    	</tr>
			                    <tr> 
			                    	<td class="text-vertical">{{$a->oracion_1}}</td> 
			                    	<td class="text-vertical">{{$a->oracion_2}}</td> 
			                    	<td class="text-vertical">{{$a->oracion_3}}</td> 
			                    	<td class="text-vertical">{{$a->oracion_4}}</td> 
			                    </tr> 
			                    <tr> <td colspan="4" class="text-left">{{ $a->observaciones}}</td></tr> 
		                    </tbody>
		                </table>
	                @endforeach
				</section>
            </div>
        </div>

        
    </div>
</div>
@endsection
