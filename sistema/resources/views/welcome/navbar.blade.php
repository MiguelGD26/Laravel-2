<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3">
    <a href="index.html" class="navbar-brand px-lg-4 m-0">
        <h1 class="m-0 display-4 text-uppercase text-white">KOPPEE</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto p-4">
            <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            <a href="{{ route('welcome') }}" class="nav-item nav-link {{ Route::is('welcome') 
            ? 'active-item' : '' }}"> Inicio </a>
            <a href="{{ route('welcome') }}" class="nav-item nav-link {{ Route::is('') 
            ? 'active-item' : '' }}"> Empieza a vender </a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categorías</a>
                <div class="dropdown-menu text-capitalize">
                    <a href="{{ route('categorias.list') }}" class="dropdown-item">Listar Categorias</a>
                    <a href="#" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{ route('soporte') }}" class="nav-item nav-link {{ Route::is('soporte') 
            ? 'active-item' : '' }}"> Soporte </a>
            <a href="#" class="nav-item nav-link">Acerca de</a>
        </div>
    </div>
</nav>