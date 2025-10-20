@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1>Listado de usuarios</h1>
        </div>
    </div> <br>
    <hr>

    <div class="row justify-content-center">
        <diva class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Usuarios registrados</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/usuarios/create') }}" class="btn btn-primary">
                            Registrar nuevo usuario
                        </a>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    @if($message = Session::get('mensaje'))
                        <script>
                            Swal.fire({
                                position: "top-center",
                                icon: "success",
                                title: "{{ $message }}",
                                showConfirmButton: false,
                                timer: 4500
                            });
                        </script>
                    @endif
                    <table class="table table-hover table-striped table-bordered table-sm">
                        <thead style="background-color: #c0c0c0; text-align: center;">
                            <tr>
                                <td>No.</td>
                                <td>Nombre</td>
                                <td>Correo electronico</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1; ?>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td class="text-center">{{ $contador++ }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td> ver/editar/borrar</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    </div>
@endsection
