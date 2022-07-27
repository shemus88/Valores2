@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
<div class="container">
<div class="row">
<div class= col-md-12>
        @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
       </div>
    <h1> Registrar Conferencias</h1>
    <a href="{{url('conferencias')}}" class="btn btn-danger float-end">Salir</a>
      </div>
    <div class="card-body">

    <form action="{{url ('update-conferencias/'.$conferencias->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
              <div class="form-group mb-3">
              <label for="">id</label>
               <input type="text" name="id"  class="form-control">
                  </div>
                <div class="form-group mb-3">
                  <label for="">Tema</label>
                  <input type="text" name="tema" value="{{$conferencias->tema}}" class="form-control">
                     </div>
                    <div class="form-group mb-3">
                       <label for="">Fecha</label>
                       <input type="text" name="fecha" value="{{$conferencias->fecha}}"class="form-control">
                         </div>
                         <div class="form-group mb-3">
                         <label for="">Hora</label>
                         <input type="text" name="hora" value="{{$conferencias->hora}}"class="form-control">
                            </div> 
                            <div class="form-group mb-3">
                                <label for="">Proposito</label>
                                <input type="text" name="proposito" value="{{$conferencias->proposito}}"class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Duracion</label>
                                <input type="text" name="duracion" value="{{$conferencias->duracion}}"class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Participantes</label>
                                <input type="text" name="participantes" value="{{$conferencias->participantes}}"class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Lugar_id</label>
                                <input type="text" name="lugar_id" value="{{$conferencias->lugar_id}}"class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Conferencista_id</label>
                                <input type="text" name="conferencista_id" value="{{$conferencias->conferencista_id}}"class="form-control">
                            </div>
                                 <div class="form-group mb-3">
                                  <button type="submit" class="btn btn-primary">Guardar Conferencias</button>
                                     </div>
                                     
    </form>
    </div>
</div>
</div>
</div>
</div>
</div>                            
    </div>
    @endsection       