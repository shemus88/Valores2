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
    <h1> Registrar Carreras</h1>
    <a href="{{url('carreras')}}" class="btn btn-danger float-end">Back</a>
      </div>
    <div class="card-body">

    <form action="{{url ('update-carreras/'.$carreras->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
              <div class="form-group mb-3">
              <label for="">id</label>
               <input type="text" name="id"  class="form-control">
                  </div>
                <div class="form-group mb-3">
                  <label for="">nombre</label>
                  <input type="text" name="nombre" value="{{$carreras->nombre}}" class="form-control">
                     </div>
                    <div class="form-group mb-3">
                       <label for="">area</label>
                       <input type="text" name="area" value="{{$carreras->area}}"class="form-control">
                         </div>
                         <div class="form-group mb-3">
                         <label for="">fecha_creacion</label>
                         <input type="text" name="fecha_creacion" value="{{$carreras->fecha_creacion}}"class="form-control">
                            </div> 

                            <div class="form-group mb-3">
                              <label for="">Carreras</label>
                              <input type="file" name="foto" value="{{$carreras->foto}}" class="form-control">
                              <img src="{{asset('Upload2/Carrera/'.$carreras->foto)}}" width="70px" height="70px" alt="foto">
                                 </div> 

                                 <div class="form-group mb-3">
                                  <button type="submit" class="btn btn-primary">Guardar Carreras</button>
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

