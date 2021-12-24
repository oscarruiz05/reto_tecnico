<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{asset('assets/img/laravel.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
        RETO TECNICO
    </a>
    @if (request()->routeIs('play'))
        <span class="navbar-brand mb-0 h1">Puntaje: 10</span>
    @endif
</nav>
