@extends('layouts.admin')
@section('content')
    <div class="rowtext-center mb-4">
        <div class="col">
            <h1>Panel prncipal</h1>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $total_usuarios }}</h3>

                    <p>Usuarios</p>
                </div>
                <div class="icon">
                    <i class="ion fas sbi bi-file-earmark-person"></i>
                </div>
                <a href="{{ url('admin/usuarios') }}" class="small-box-footer">Mas informacion <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
