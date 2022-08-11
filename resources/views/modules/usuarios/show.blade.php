@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card">
            <form method="POST" action="{{ route('usuarios-destroy', ['user' => $item->id]) }}">
                @method('DELETE')
                @csrf
                <div class="card-body m-0">
                    <h3>Nombre: {{ $item->name }}</h3>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('usuarios') }}" class="btn btn-outline-secondary mx-2">
                        Regresar
                    </a>
                    <button type="submit" class="btn btn-success">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
