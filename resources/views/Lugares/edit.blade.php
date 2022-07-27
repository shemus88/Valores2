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
    <h1> Registrar Lugares</h1>
    <a href="{{url('lugares')}}" class="btn btn-danger float-end">Salir</a>
      </div>
    <div class="card-body">

    <form action="{{url ('update-lugares/'.$lugares->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
              <div class="form-group mb-3">
              <label for="">id</label>
               <input type="text" name="id"  value="{{$lugares->id}}" class="form-control">
                  </div>
                <div class="form-group mb-3">
                  <label for="">nombre</label>
                  <input type="text" name="nombre" value="{{$lugares->nombre}}" class="form-control">
                     </div>
                    <div class="form-group mb-3">
                       <label for="">capacidad</label>
                       <input type="text" name="capacidad" value="{{$lugares->capacidad}}"class="form-control">
                         </div>
                         <div class="form-group mb-3">
                         <label for="">status</label>
                         <input type="text" name="status" value="{{$lugares->status}}"class="form-control">
                            </div> 

                            <div class="form-group mb-3">
                              <label for="">Imagenes de Lugares </label>
                              <input type="file" name="foto"value="{{$lugares->foto}}" class="form-control">
                              <img src="{{asset('Upload-Lugar/'.$lugares->foto)}}" width="70px" height="70px" alt="foto">
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
    </div>
    @endsection       

