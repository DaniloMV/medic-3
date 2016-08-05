@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Pacientes s/Discapacidad</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th class="text-right">Obra Social</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pacientes_normales as $p)
                            <tr class="clickable-row" data-href="{{ url('/paciente/').'/'.$p->id }}">
                                <td>{{ $p->apellido .', ' . $p->nombre}} <small>( {{$p->edad}} )</small></td>
                                <td class="text-right small">{{ $p->obrasocial }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Pacientes c/Discapacidad</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th class="text-right">Obra Social</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pacientes_discapacidad as $p)
                            <tr class="clickable-row" data-href="{{ url('/paciente/').'/'.$p->id }}">
                                <td>{{ $p->apellido .', ' . $p->nombre}} <small>( {{$p->edad}} )</small></td>
                                <td class="text-right small">{{ $p->obrasocial }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Pacientes Sordos o Hipoacusicos</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th class="text-right">Obra Social</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pacientes_sordos as $p)
                            <tr class="clickable-row" data-href="{{ url('/paciente/').'/'.$p->id }}">
                                <td>{{ $p->apellido .', ' . $p->nombre}} <small>( {{$p->edad}} )</small></td>
                                <td class="text-right small">{{ $p->obrasocial }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
