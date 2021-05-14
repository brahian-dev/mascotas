<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mascotas 🐶</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Registro</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="{{ route('consultas') }}">Consulta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('consultasCompra') }}">Consulta de compras</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>