@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
<div class="container">
  <!-- Content here -->
</div>
    <h1> Lista de los conferencistas</h1>
    <a href="{{url('Registrar Conferencistas')}}" class="btn btn-primary">
    </button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>Registrar Conferencistas</a> 
    <table class="table table-striped table-hover">
  <thead>
  <tr>
  <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">ap_paterno</th>
      <th scope="col">ap_materno</th>
      <th scope="col">email</th>
      <th scope="col">numcel</th>
      <th scope="col">perfil</th>
      <th scope="col">foto</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($conferencistas as $conferencista)
    <tr>
    <td scope="col">{{$conferencista->id}}</td>
      <td scope="col">{{$conferencista->nombre}}</td>
      <td scope="col">{{$conferencista->ap_paterno}}</td>
      <td scope="col">{{$conferencista->ap_materno}}</td>
      <td scope="col">{{$conferencista->email}}</td>
      <td scope="col">{{$conferencista->numcel}}</td>
      <td scope="col">{{$conferencista->perfil}}</td>
   <td>
    <img src="{{asset('Upload3/Conferencistas/'.$conferencista->foto)}}" width="90px" height="90px" alt="foto">
  </td>
  <td>
<a href="{{url('edit-conferencistas/'.$conferencista->id)}}" class="btn btn-primary btn-sm">Edit</a>
  </td>
  <td>
{{--<a href="{{url('delete-conferencistas/'.$conferencista->id)}}" class="btn btn-danger btn-sm">Delete</a> --}}

<form action="{{url('delete-conferencistas/'.$conferencista->id)}}" method="POST">
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