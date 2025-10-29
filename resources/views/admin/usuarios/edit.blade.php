@extends('layouts.admin')
@section('content')
    <div class="row justify-content-center">
        <div class="col-10">
            <h1>Modificar usuario: {{ $usuario->name }}</h1>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/usuarios/' . $usuario->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <label for="">Nombre del usuario:</label> <b>*</b>
                                        <input type="text" value="{{ $usuario->name }}" name="name" class="form-control" required>
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <label for="">Correo electronico:</label> <b>*</b>
                                        <input type="email" value="{{ $usuario->email }}" name="email" class="form-control" required>
                                        @error('email')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <label for="">Contraseña:</label>
                                        <input type="password" value="{{ old('password') }}" name="password" class="form-control">
                                        @error('password')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <label for="">Verificar contraseña:</label>
                                        <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="form-control">
                                        @error('password_confirmation')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/usuarios')}}" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-success">Actualizar usuario</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
