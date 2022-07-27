@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
<div class="container">
<div class="row">
<div class= col-md-12>
        @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
    <h1> Crear Conferencias</h1>
    <a href="{{url('conferencias')}}" class="btn btn-danger float-end">Salir</a>
      </div>
    <div class="card-body">
    <form action="{{url('Registrar Conferencias')}}" method="POST" enctype="multipart/form-data">
        @csrf

              <div class="form-group mb-3">
              <label for="" >id</label>
               <input id="id" name="id" class="form-control" type="text" class="form-control" tabindex="1">
                  </div>
                <div class="form-group mb-3">
                  <label for="" >Tema</label>
                  <input tema="tema" name="tema" class="form-control" type="text" class="form-control" tabindex="2">
                     </div>
                    <div class="form-group mb-3">
                       <label for="" >Fecha</label>
                       <input fecha="fecha" name="fecha" class="form-control" type="text" class="form-control" tabindex="3">
                         </div>
                         <div class="form-group mb-3">
                         <label for="" >Hora</label>
                         <input hora="hora" name="hora" class="form-control" type="text" class="form-control" tabindex="4">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" >Proposito</label>
                                <input proposito="proposito" name="proposito" class="form-control" type="text" class="form-control" tabindex="5">
                                   </div> 
                                   <div class="form-group mb-3">
                                    <label for="" >Duracion</label>
                                    <input duracion="duracion" name="duracion" class="form-control" type="text" class="form-control" tabindex="6">
                                       </div>
                                       <div class="form-group mb-3">
                                        <label for="" >Particpantes</label>
                                        <input participantes="participantes" name="participantes" class="form-control" type="text" class="form-control" tabindex="7">
                                           </div>
                                           <div class="form-group mb-3">
                                        <label for="" >Lugar_id</label>
                                        <input lugar_id="lugar_id" name="lugar_id" class="form-control" class="form-control" type="text" class="form-control" tabindex="8">
                                           </div>
                                           <div class="form-group mb-3">
                                        <label for="" >Conferencista_id</label>
                                        <input conferencista_id="conferencista_id" name="conferencista_id" class="form-control" type="text" class="form-control" tabindex="9">
                                           </div>
                                 <div class="form-group mb-3">
                                  <button type="submit" class="btn btn-primary">Guardar Conferencias</button>
                                 </div>
                               </form> 
                                </div>
                            </div>
                            </div>                           
                                </div>
                                @endsection       
                            

