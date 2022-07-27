@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Respuesta</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Respuestas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estudiante_id:</strong>
                {{ $respuesta->estudiante_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Encuesta_id:</strong>
                {{ $respuesta->encuesta_id }}
            </div>
        </div>
    </div>
@endsection