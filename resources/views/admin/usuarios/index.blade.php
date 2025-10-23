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
                    <table id="example1" class="table table-hover table-striped table-bordered table-sm">
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
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example" >
                                            <button type="button" class="btn btn-info"><i class="bi bi-eye"></i></button>
                                            <button type="button" class="btn btn-success">Editar</button>
                                            <button type="button" class="btn btn-danger">Borrar</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando START a END de TOTAL Usuarios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                                    "infoFiltered": "(Filtrado de MAX total Usuarios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar MENU Usuarios",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    },{
                                        extend: 'csv'
                                    },{
                                        extend: 'excel'
                                    },{
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }
                                    ]
                                },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                </div>
            </div>
    </div>
    </div>
@endsection
