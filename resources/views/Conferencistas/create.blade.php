@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
<div class="container">
<div class="row">
<div class= col-md-12>
        @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
    <h1> Registrar Conferencistas</h1>
    <a href="{{url('conferencistas')}}" class="btn btn-danger float-end">Back</a>
      </div>
    <div class="card-body">
    <form action="{{url('Registrar Conferencistas')}}" method="POST" enctype="multipart/form-data">
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
                       <label for="">ap_paterno</label>
                       <input type="text" name="ap_paterno" class="form-control">
                         </div>
                         <div class="form-group mb-3">
                         <label for="">ap_materno</label>
                         <input type="text" name="ap_materno" class="form-control">
                            </div> 
                            <div class="form-group mb-3">
                                <label for="">email</label>
                                <input type="text" name="email" class="form-control">
                                   </div> 
                                   <div class="form-group mb-3">
                                    <label for="">numcel</label>
                                    <input type="text" name="numcel" class="form-control">
                                       </div> 

                                       <div class="form-group mb-3">
                                        <label for="">perfil</label>
                                        <input type="text" name="perfil" class="form-control">
                                           </div> 
                            <div class="form-group mb-3">
                              <label for="">Conferencistas</label>
                              <input type="file" name="foto" class="form-control">
                                 </div> 

                                 <div class="form-group mb-3">
                                  <button type="submit" class="btn btn-primary">Guardar Conferencista</button>
                                     </div>
                                     
    </form>
    </div>
</div>
</div>

                                
    </div>
    @endsection       

