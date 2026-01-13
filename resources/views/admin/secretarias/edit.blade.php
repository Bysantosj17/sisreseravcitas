@extends('layouts.admin')
@section('content')
    <div class="row justify-content-center">
        <div class="col-10">
            <h1>Modificar secretaria: {{ $secretaria->nombres }} {{ $secretaria->apellidos }}</h1>
        </div>
    </div>

    <hr>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/secretarias', $secretaria->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="">Nombres:</label> <b>*</b>
                                    <input type="text" value="{{ $secretaria->nombres }}" name="nombres"
                                        class="form-control" required>
                                    @error('nombres')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="">Apellidos:</label> <b>*</b>
                                    <input type="text" value="{{ $secretaria->apellidos }}" name="apellidos" required>
                                    @error('nombres')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="">Celular:</label> <b>*</b>
                                    <input type="number" value="{{ $secretaria->celular }}" name="celular"
                                        class="form-control" required>
                                    @error('celular')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="">Ine:</label> <b>*</b>
                                    <input type="number" value="{{ $secretaria->ine}}" name="ine" class="form-control"
                                        required>
                                    @error('ine')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="">Fecha de nacimiento:</label> <b>*</b>
                                    <input type="date" value="{{ $secretaria->fecha_nacimiento }}" name="fecha_nacimiento"
                                        class="form-control" required>
                                    @error('fecha_nacimiento')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form group">
                                    <label for="">Direccion:</label> <b>*</b>
                                    <input type="address" value="{{ $secretaria->direccion }}" name="direccion"
                                        class="form-control" required>
                                    @error('direccion')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">Email:</label> <b>*</b>
                                    <input type="email" value="{{ $secretaria->user->email }}" name="email" class="form-control">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="">Contraseña:</label> <b>*</b>
                                    <input type="password" value="{{ old('password') }}" name="password"
                                        class="form-control">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="">Verificar contraseña:</label> <b>*</b>
                                    <input type="password" value="{{ old('password_confirmation') }}"
                                        name="password_confirmation" class="form-control">
                                    @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <a href="{{ url('admin/secretarias') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar registro</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
