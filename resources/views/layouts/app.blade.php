<!DOCTYPE html>
<html lang="es">
@include('layouts.src.head')
<body>
    {{-- @include('layouts.src.header') --}}
    @yield('content')
    @include('layouts.src.scripts')
</body>
</html>
