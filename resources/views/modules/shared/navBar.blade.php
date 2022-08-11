<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ asset('home') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ isRoute('home') }}" aria-current="page" href="{{ route('home') }}"> <i
                            class="fa-solid fa-house-chimney"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isRoute('usuarios*') }}" aria-current="page" href="{{ route('usuarios') }}"><i
                            class="fa-solid fa-users"></i> Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isRoute('categorias*') }}" aria-current="page"
                        href="{{ route('categorias') }}"><i class="fa-solid fa-boxes-stacked"></i> Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isRoute('proveedores*') }}" aria-current="page"
                        href="{{ route('proveedores') }}">
                        <i class="fa-solid fa-people-carry-box"></i>
                        Proveedores
                    </a>
                </li>
            </ul>
            <a href="{{ route('auth-logout') }}" class="btn btn-danger">
                Salir
            </a>
        </div>
    </div>
</nav>
