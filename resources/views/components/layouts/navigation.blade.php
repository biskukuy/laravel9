<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">LARAVEL 9</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }} ">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pagina') }}">Pagina</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tareas.index') }}">Tareas</a>
            </li>
        </ul>
    </div>
</nav>
