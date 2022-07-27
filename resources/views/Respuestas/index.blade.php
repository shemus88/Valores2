@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
<div class="container">

  <!-- Content here -->
</div>
    <h1> Lista de Respuestas</h1>
    
<a href="{{ route('register')}}"button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
    
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>Registrar Respuestas</a>

    <table class="table table-striped table-hover">
  <thead>
  <tr>
    <th scope="col">id</th>
      <th scope="col">estudiante_id</th>
      <th scope="col">encuesta_id</th>
      <th scope="col">r001</th>
      <th scope="col">r002</th>
      <th scope="col">r003</th>
      <th scope="col">r004</th>
      <th scope="col">r005</th>
      <th scope="col">r006</th>
      <th scope="col">r007</th>
      <th scope="col">r008</th>
      <th scope="col">r009</th>
      <th scope="col">r010</th>
      <th scope="col">r011</th>
      <th scope="col">r012</th>
      <th scope="col">r013</th>
      <th scope="col">r014</th>
      <th scope="col">r015</th>
      <th scope="col">r016</th>
      <th scope="col">r017</th>
      <th scope="col">r018</th>
      <th scope="col">r019</th>
      <th scope="col">r020</th>
      <th scope="col">r021</th>
      <th scope="col">r022</th>
      <th scope="col">r023</th>
      <th scope="col">r024</th>
      <th scope="col">r025</th>
      <th scope="col">r026</th>
      <th scope="col">r027</th>
      <th scope="col">r028</th>
      <th scope="col">r029</th>
      <th scope="col">r030</th>
      <th scope="col">r031</th>
      <th scope="col">r032</th>
      <th scope="col">r033</th>
      <th scope="col">r034</th>
      <th scope="col">r035</th>
      <th scope="col">r036</th>
      <th scope="col">r037</th>
      <th scope="col">r038</th>
      <th scope="col">r039</th>
      <th scope="col">r040</th>
    </tr>
  </thead>
  <tbody>
    @foreach($respuestas as $respuesta)
    <tr>
    <th scope="col">{{$participacion->id}}</th>
    <th scope="col">{{$participacion->estudiante_id}}</th>
      <th scope="col">{{$participacion->conferencia_id}}</th>
      <th scope="col">{{$participacion->r001}}</th>
      <th scope="col">{{$participacion->r002}}</th>
      <th scope="col">{{$participacion->r003}}</th>
      <th scope="col">{{$participacion->r004}}</th>
      <th scope="col">{{$participacion->r005}}</th>
      <th scope="col">{{$participacion->r006}}</th>
      <th scope="col">{{$participacion->r007}}</th>
      <th scope="col">{{$participacion->r008}}</th>
      <th scope="col">{{$participacion->r009}}</th>
      <th scope="col">{{$participacion->r010}}</th>
      <th scope="col">{{$participacion->r011}}</th>
      <th scope="col">{{$participacion->r012}}</th>
      <th scope="col">{{$participacion->r013}}</th>
      <th scope="col">{{$participacion->r014}}</th>
      <th scope="col">{{$participacion->r015}}</th>
      <th scope="col">{{$participacion->r016}}</th>
      <th scope="col">{{$participacion->r017}}</th>
      <th scope="col">{{$participacion->r018}}</th>
      <th scope="col">{{$participacion->r019}}</th>
      <th scope="col">{{$participacion->r020}}</th>
      <th scope="col">{{$participacion->r021}}</th>
      <th scope="col">{{$participacion->r022}}</th>
      <th scope="col">{{$participacion->r023}}</th>
      <th scope="col">{{$participacion->r024}}</th>
      <th scope="col">{{$participacion->r025}}</th>
      <th scope="col">{{$participacion->r026}}</th>
      <th scope="col">{{$participacion->r027}}</th>
      <th scope="col">{{$participacion->r028}}</th>
      <th scope="col">{{$participacion->r029}}</th>
      <th scope="col">{{$participacion->r030}}</th>
      <th scope="col">{{$participacion->r031}}</th>
      <th scope="col">{{$participacion->r032}}</th>
      <th scope="col">{{$participacion->r033}}</th>
      <th scope="col">{{$participacion->r034}}</th>
      <th scope="col">{{$participacion->r035}}</th>
      <th scope="col">{{$participacion->r036}}</th>
      <th scope="col">{{$participacion->r037}}</th>
      <th scope="col">{{$participacion->r038}}</th>
      <th scope="col">{{$participacion->r039}}</th>
      <th scope="col">{{$participacion->r040}}</th>
      <td>
        <form action="{{ route('Respuestas.index',$value->id) }}" method="POST">   
            <a class="btn btn-info" href="{{ route('respuestas.show',$value->id) }}">Show</a>    
            <a class="btn btn-primary" href="{{ route('respuestas.edit',$value->id) }}">Edit</a>   
            @csrf
            @method('DELETE')      
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
   </tr>
   @endforeach
  </tbody>
</table>
</div>
    @endsection