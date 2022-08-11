@extends('layouts.main')

@section('content')
    <style>
    </style>
    <div class="container">
        <div class="card p-0 m-0">
            <div class="card-header">
                <a href="{{ route('usuarios-create') }}" class="btn btn-success mb-2">
                    Nuevo usuario
                </a>
                <form action="{{ route('usuarios') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ $query }}" name="query"
                            placeholder="Buscador..." />
                        <button type="submit" class="input-group-text btn btn-primary">
                            Buscar
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-body p-0 m-0 table-responsive">
                <table class="table table-striped table-hover text-center m-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Rol</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    @if ($item->img != '')
                                        <img src="{{ asset("imgsUsuarios/$item->img") }}" class="img-usuario" />
                                    @else
                                        <img src="{{ asset('img/user.png') }}" class="img-usuario" />
                                    @endif
                                    {{ $item->name }}
                                </td>
                                <td>{{ $item->rol }}</td>
                                <td>
                                    <a href="{{ route('usuarios-edit', ['user' => $item->id]) }}"
                                        class="btn btn-warning">Edit</a>
                                    | <a href="{{ route('usuarios-show', ['user' => $item->id]) }}"
                                        class="btn btn-danger">Delete</a>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex justify-content-end">
                {{ $items->links() }}
            </div>
        </div>
    </div>
@endsection
