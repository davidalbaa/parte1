@extends('layouts.main')

@section('content')
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
    </style>
    <div class="container">
        <div class="card p-0 m-0">
            <div class="card-header">
                <a href="{{ route('proveedores-create') }}" class="btn btn-success mb-2">
                    Nuevo proveedor
                </a>
                <form action="{{ route('proveedores') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ $query }}" name="query"
                            placeholder="Buscador..." />
                        <button type="submit" class="input-group-text btn btn-primary">
                            Buscar
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover text-center m-0 p-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="{{ route('proveedores-edit', ['proveedor' => $item->id]) }}"
                                        class="btn btn-warning">Edit</a>
                                    | <a href="{{ route('proveedores-show', ['proveedor' => $item->id]) }}"
                                        class="btn btn-danger">Delete</a>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $items->links() }}
            </div>
        </div>
    </div>
@endsection
