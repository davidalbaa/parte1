@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card">
            <form method="POST" action="{{ route('usuarios-update', ['user' => $item->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                <div class="card-body m-0">
                    @include('modules.usuarios.form')
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('usuarios') }}" class="btn btn-outline-secondary mx-2">
                        Regresar
                    </a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
