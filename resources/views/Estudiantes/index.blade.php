@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
    <div class="container">
      <!-- Content here -->
    </div>
        <h1> Lista de Estudiantes</h1>
        <a href="{{ route('register')}}"button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
    </svg>Registrar Estudiantes</a>
        <table class="table table-striped table-hover">
      <thead>
      <tr>
          <th scope="col">id</th>
          <th scope="col">matricula</th>
          <th scope="col">generacion</th>
          <th scope="col">foto</th>
          <th scope="col">user_id</th>
          <th scope="col">carrera_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach($estudiantes as $estudiante)
        <tr>
        <th scope="col">{{$estudiante->id}}</th>
          <th scope="col">{{$estudiante->matricula}}</th>
          <th scope="col">{{$estudiante->generacion}}</th>
          <th scope="col">{{$estudiante->foto}}</th>
          <th scope="col">{{$estudiante->user_id}}</th>
          <th scope="col">{{$estudiante->carrera_id}}</th>
       </tr>
       @endforeach
      </tbody>
    </table>
    </div>
        @endsection