@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
<div class="container">
<div class="row">
<div class= col-md-12>
        @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
    <h1> Registrar Lugares</h1>
    <a href="{{url('lugares')}}" class="btn btn-danger float-end">Back</a>
      </div>
    <div class="card-body">
    <form action="{{url('Registrar Lugares')}}" method="POST" enctype="multipart/form-data">
        @csrf

              <div class="form-group mb-3">
              <label for="">id</label>
               <input type="text" name="id" class="form-control" type="text" class="form-control" tabindex="1">
                  </div>
                <div class="form-group mb-3">
                  <label for="">nombre</label>
                  <input type="text" name="nombre" class="form-control" type="text" class="form-control" tabindex="2">
                     </div>
                    <div class="form-group mb-3">
                       <label for="">capacidad</label>
                       <input type="text" name="capacidad" class="form-control" type="text" class="form-control" tabindex="3">
                         </div>
                         <div class="form-group mb-3">
                         <label for="">status</label>
                         <input type="text" name="status" class="form-control" type="text" class="form-control" tabindex="4">
                            </div> 

                            <div class="form-group mb-3">
                              <label for="">Lugares Name</label>
                              <input type="file" name="foto" class="form-control">
                                 </div> 

                                 <div class="form-group mb-3">
                                  <button type="submit" class="btn btn-primary">Guardar Lugar</button>
                                     </div>
                                     
    </form>
    </div>
</div>
</div>

                                
    </div>
    @endsection       

