@extends('layouts.app')
@section('content')

<div class="container !direction !spacing">
<div class="container">
<div class="row">
<div class= col-md-12>
        @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
       </div>
    <h1> Registrar Lugares</h1>
    <a href="{{url('usuarios')}}" class="btn btn-danger float-end">Back</a>
      </div>
    <div class="card-body">

    <form action="{{url ('update-users/'.$users->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
              <div class="form-group mb-3">
              <label for="">id</label>
               <input type="text" name="id"  class="form-control">
                  </div>
                <div class="form-group mb-3">
                  <label for="">nombre</label>
                  <input type="text" name="nombre" value="{{$users->nombre}}" class="form-control">
                     </div>
                    <div class="form-group mb-3">
                       <label for="">appaterno</label>
                       <input type="text" name="ap_paterno" value="{{$users->appaterno}}"class="form-control">
                         </div>
                         <div class="form-group mb-3">
                         <label for="">apmaterno</label>
                         <input type="text" name="ap_,materno" value="{{$users->apmaterno}}"class="form-control">
                            </div> 

                            <div class="form-group mb-3">
                                <label for="">email</label>
                                <input type="text" name="email" value="{{$users->email}}"class="form-control">                      
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">rol</label>
                                    <input type="text" name="rol" value="{{$users->rol}}"class="form-control">
                                    <option selected>Elija su rol</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Estudiante</option>
                                    <option value="3">Tutor</option>
                                    <option value="3">Coordinador</option>                      
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">sexo</label>
                                        <input type="text" name="sexo" value="{{$users->sexo}}"class="form-control">
                                        <option selected>Elija su sexo</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option> 
                                    </select>                     
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">status</label>
                                            <input type="text" name="status" value="{{$users->status}}"class="form-control">
                                            <option selected>Elija su status</option>
                                            <option value="1">Activo</option>
                                            <option value="2">Baja Temporal</option>
                                            <option value="3">Baja Definitiva</option> 
                                        </select>                    
                                            </div>
                            <div class="form-group mb-3">
                              <label for="">Usuario </label>
                              <input type="file" name="foto"value="{{$users->foto}}" class="form-control">
                              <img src="{{asset('Upload4-Users/'.$users->foto)}}" width="70px" height="70px" alt="foto">
                                 </div> 

                                 <div class="form-group mb-3">
                                  <button type="submit" class="btn btn-primary">Guardar Lugar</button>
                                     </div>
                                     
    </form>
    </div>
</div>
</div>
</div>
</div>
</div> 

                
@endsection