@extends ('layouts.app')

@section('content')
    <div class="container !direction !spacing">
        <div class="container">
            <!-- Content here -->
        </div>
        <h1> Lista de Usuarios</h1>
        <a href="{{ url('Registrar Usuario') }}"class="btn btn-primary">
        </button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
    </svg>Registrar Usuario</a>
        <table class="table table-striped table-hover">
            <thead>

                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">appaterno</th>
                    <th scope="col">apmaterno</th>
                    <th scope="col">email</th>
                    <th scope="col">rol</th>
                    <th scope="col">sexo</th>
                    <th scope="col">status</th>
                    <th scope="col">foto</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="col">{{ $user->id }}</td>
                        <td scope="col">{{ $user->name }}</td>
                        <td scope="col">{{ $user->appaterno }}</td>
                        <td scope="col">{{ $user->apmaterno }}</td>
                        <td scope="col">{{ $user->email }}</td>
                        <td scope="col">{{ $user->rol }}</td>
                        <td scope="col">{{ $user->sexo }}</td>
                        <td scope="col">{{ $user->status }}</td>
                    </td>
                    <td>
                        <img src="{{asset('Upload4/Usuario/'.$user->foto)}}" width="70px" height="70px" alt="foto">
                      </td>
                      <td>
                  <a href="{{url('edit-users/'.$user->id)}}" class="btn btn-primary btn-sm">Edit</a>
                      </td>
                      <td>
                
                   {{--<a href="{{url('delete-usuario/'.$user->id)}}" class="btn btn-danger btn-sm">Delete</a> --}}
                
                   <form action="{{url('delete-usuario/'.$user->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                
                    <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                   </form>
                      </td>
                   @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $users->links() !!}
        </div>
    </div>
@endsection
