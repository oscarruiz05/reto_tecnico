@extends('layouts.app')

@section('content')
    <div class="fondo">
        <div class="container">
            <section class="seccion">
                <div class="titulo text-center">
                    <h2>Bienvenido</h2>
                </div>
                <!-- tabla de posiciones -->
                @if ($best_players)
                <div class="px-5">
                    <div class="tabla-posiciones">
                        <div class="tabla-posiciones-titulo text-center">
                            <h3>Tabla de posiciones</h3>
                        </div>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    <th class="text-center">Puntaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($best_players as $key => $item)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td class="text-center">{{$item->score}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif

                <!-- formulario ingresar al juego -->
                <div class="form-ingresar mt-5">
                    <form class="form-inline" onsubmit="registrar();return false">
                        @csrf
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre">
                        <a href="#" class="ml-4"><button type="submit" class="btn btn-primary">Inciar Juego</button></a>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('myScripts')
    <script src="{{asset('assets/js/pages/registrar.js')}}"></script>
@endsection
