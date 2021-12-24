<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class Questions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => '¿En que año descubrió Colón América?',
                'categories_id' => 1
            ],
            [
                'question' => '¿Cuál era la capital del Imperio Inca?',
                'categories_id' => 1
            ],
            [
                'question' => '¿Cuándo se produjo principalmente el Siglo de Oro?',
                'categories_id' => 1
            ],
            [
                'question' => '¿En que país nació Adolf Hitler?',
                'categories_id' => 1
            ],
            [
                'question' => '¿Cuál de estas no es una las 7 maravillas del mundo antiguo?',
                'categories_id' => 1
            ],
            /* geografia */
            [
                'question' => '¿Cuantos continentes hay en el mundo?',
                'categories_id' => 2
            ],
            [
                'question' => '¿El rio mas cudaloso del mundo es?',
                'categories_id' => 2
            ],
            [
                'question' => '¿La cordillera de los Andes se encuentra?',
                'categories_id' => 2
            ],
            [
                'question' => '¿La cordillera de los Himalayas se encuentra en?',
                'categories_id' => 2
            ],
            [
                'question' => '¿Estambul es la capital de?',
                'categories_id' => 2
            ],
            /* Deportes */
            [
                'question' => 'El ___ es el deporte mas poular y practicado en el mundo',
                'categories_id' => 3
            ],
            [
                'question' => 'El balon debe ser tocado o impulsado con golpes limpios, pero no puede ser parado, sujetado, retenido o acompañado',
                'categories_id' => 3
            ],
            [
                'question' => '¿Cual es el corredor mas rápido del mundo?',
                'categories_id' => 3
            ],
            [
                'question' => '¿En cuál deporte necesitas un bate y un guante?',
                'categories_id' => 3
            ],
            [
                'question' => '¿Cuánto dura un partido de baloncesto?',
                'categories_id' => 3
            ],
            /* Entretenimiento */
            [
                'question' => 'Cual de estas desarrolladoras pertenece a Disney',
                'categories_id' => 4
            ],
            [
                'question' => 'Cual de estos personajes es de DC',
                'categories_id' => 4
            ],
            [
                'question' => 'En que serie aparece el "Demogorgon"',
                'categories_id' => 4
            ],
            [
                'question' => '¿Actor que interpreta a Mr. Bean?',
                'categories_id' => 4
            ],
            [
                'question' => '¿A que película de Disney pertenece la cancion *un mundo ideal*?',
                'categories_id' => 4
            ],
            /* Programacion */
            [
                'question' => 'var plan = customer == null ? plan.basico():customer.plan(); ¿Qué pasaría si el customer no existe?',
                'categories_id' => 5
            ],
            [
                'question' => '¿Cuál de estas es un bucle for correctamente escrito?',
                'categories_id' => 5
            ],
            [
                'question' => 'Para asignar el valor "hora actual" a la variable "t", deberemos escribir...',
                'categories_id' => 5
            ],
            [
                'question' => 'Para añadir nuevos elementos a una lista...',
                'categories_id' => 5
            ],
            [
                'question' => 'El lenguaje de máquina esta formado por...',
                'categories_id' => 5
            ],
        ];

        foreach ($questions as $item) {
            Question::create([
                'question' => $item['question'],
                'categories_id' => $item['categories_id']
            ]);
        }
    }
}
