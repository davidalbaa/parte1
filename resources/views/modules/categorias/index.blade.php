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
                <a href="{{ route('categorias-create') }}" class="btn btn-success mb-2">
                    Nueva categoria
                </a>
                <form action="{{ route('categorias') }}" method="GET">
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
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="{{ route('categorias-edit', ['categoria' => $item->id]) }}"
                                        class="btn btn-warning">Edit</a>
|                                    <a href="{{ route('categorias-show', ['categoria' => $item->id]) }}"
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
