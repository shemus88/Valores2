@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
<div class="container">
  <!-- Content here -->
</div>
    <h1> Lista de las Conferencias</h1>
    <a href="{{ url('Registrar Conferencias')}}"button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>Registrar Conferencias</a>
    <table class="table table-striped table-hover">
  <thead>
  <tr>
      <th scope="col">id</th>
      <th scope="col">tema</th>
      <th scope="col">fecha</th>
      <th scope="col">hora</th>
      <th scope="col">proposito</th>
      <th scope="col">duracion</th>
      <th scope="col">participantes</th>
      <th scope="col">lugar_id</th>
      <th scope="col">conferencista_id</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($conferencias as $conferencias)
    <tr>
    <td scope="col">{{$conferencias->id}}</td>
      <td scope="col">{{$conferencias->tema}}</td>
      <td scope="col">{{$conferencias->fecha}}</td>
      <td scope="col">{{$conferencias->hora}}</td>
      <td scope="col">{{$conferencias->proposito}}</td>
      <td scope="col">{{$conferencias->duracion}}</td>
      <td scope="col">{{$conferencias->participantes}}</td>
      <td scope="col">{{$conferencias->lugar_id}}</td>
      <td scope="col">{{$conferencias->conferencista_id}}</td>
   <td>
    <a href="{{url('edit-conferencias/'.$conferencias->id)}}"  method="PUT"class="btn btn-primary btn-sm">Edit</a>
        </td>
        <td>
     {{--<a href="{{url('delete-conferencias/'.$conferencias->id)}}" class="btn btn-danger btn-sm">Delete</a> --}}
  
     <form action="{{url('delete-conferencias/'.$conferencias->id)}}" method="POST">
      @csrf
      @method('DELETE')
  
      <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
     </form>
        </td>
   @endforeach
  </tbody>
</table>
</div>
    @endsection
