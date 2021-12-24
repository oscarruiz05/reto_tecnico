@extends('layouts.app')

@section('content')
    <div class="fondo">
        <div class="container">
            <section class="seccion2">
                <div class="row">
                    <div class="col-4 align-self-center">
                        <span class="h4  text-white" id="ronda">Ronda: 1/5</span> <br> <br>
                        <span class="h4 text-white" id="puntaje">Puntaje: 0</span>
                    </div>
                    <div class="col-4 text-center align-self-center">
                        <span class="h4 text-white" id="jugador">Jugador: </span>
                    </div>
                    <div class="col-4 text-right align-self-center">
                        <div class="img-salir d-inline-block">
                            <a href="#">
                                <img src="{{asset('assets/img/salir.png')}}" class="w-100" alt="salir" title="Salir" onclick="salir()">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="preguntas-respuestas">
                    <div class="cuestionario">
                        <div class="pregunta text-center">
                            <h3 id="question"></h3>
                        </div>
                        <div class="preguntas">
                            <div class="respuestas" id="respuestas">
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection

@section('myScripts')
    <!-- main js -->
    <script src="{{asset('assets/js/pages/main.js')}}"></script>
@endsection
