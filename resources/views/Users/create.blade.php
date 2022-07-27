@extends('layouts.app')
@section('content')

<div class="container !direction !spacing">
<div class="container">
<div class="row">
<div class= col-md-12>
        @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
    <h1> Registrar Usuarios</h1>
    <a href="{{url('usuarios')}}" class="btn btn-danger float-end">Back</a>
      </div>
    <div class="card-body">
    <form action="{{url('Registrar Usuario')}}" method="POST" enctype="multipart/form-data">
        @csrf

              <div class="form-group mb-3">
              <label for="">id</label>
               <input type="text" name="id" class="form-control">
                  </div>
                <div class="form-group mb-3">
                  <label for="">nombre</label>
                  <input type="text" name="nombre" class="form-control">
                     </div>
                    <div class="form-group mb-3">
                       <label for="">appaterno</label>
                       <input type="text" name="ap_paterno" class="form-control">
                         </div>
                         <div class="form-group mb-3">
                         <label for="">apmaterno</label>
                         <input type="text" name="ap_materno" class="form-control">
                            </div> 

                            <div class="form-group mb-3">
                                <label for="">email</label>
                                <input type="text" name="email" class="form-control">                      
                                </div>

                                <div class="form-group mb-3">
                                <label for="inputState">Rol</label>
                                <select class="custom-select" name= "rol"class="form-control">
                                    <option selected>Elija su Rol</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Estudiante</option>
                                    <option value="3">Tutor</option>
                                  </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="inputState">Sexo</label>
                                    <select class="custom-select" name= "sexo"class="form-control">
                                    <option selected>Elija su Sexo</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option> 
                                    </select>                    
                                    </div>
    
                            <div class="form-group mb-3">
                              <label for="">Usuario </label>
                              <input type="file" name="foto" class="form-control">
                                 </div> 
                                   
                                 <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Guardar Usuario</button>
            </div>
    </form>
    </div>
</div>
</div>                           
</div>
</div>      
@endsection