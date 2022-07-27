@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
<div class="container">
  <!-- Content here -->
  </div>
    <h1> Lista de Conferencias</h1>
    <a href="{{ route('register')}}"button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>Registrar Conferencias</a>
    <table class="table table-striped table-hover">
  <thead>
  <tr>
      <th scope="col">id</th>
      <th scope="col">periodo</th>
      <th scope="col">fecha_inicio</th>
      <th scope="col">fecha_termina</th>
      <th scope="col">responsable</th>
    </tr>
  </thead>
  <tbody>
    @foreach($encuestas as $encuesta)
    <tr>
    <th scope="col">{{$encuesta->id}}</th>
      <th scope="col">{{$encuesta->periodo}}</th>
      <th scope="col">{{$encuesta->fecha_inicio}}</th>
      <th scope="col">{{$encuesta->fecha_termina}}</th>
      <th scope="col">{{$encuesta->responsable}}</th>
   </tr>
   @endforeach
  </tbody>
</table>
</div>
    @endsection
