<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class Answers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Historia = [
            [
                'answer' => '1942',
                'status' => true,
                'questions_id' => 1
            ],
            [
                'answer' => '1502',
                'status' => false,
                'questions_id' => 1
            ],
            [
                'answer' => '1496',
                'status' => false,
                'questions_id' => 1
            ],
            [
                'answer' => '1488',
                'status' => false,
                'questions_id' => 1
            ],
            /* pregunta 2 */
            [
                'answer' => 'Cuzco',
                'status' => true,
                'questions_id' => 2
            ],
            [
                'answer' => 'Quito',
                'status' => false,
                'questions_id' => 2
            ],
            [
                'answer' => 'MAchu Picchu',
                'status' => false,
                'questions_id' => 2
            ],
            [
                'answer' => 'Lima',
                'status' => false,
                'questions_id' => 2
            ],
            /* pregunta 3 */
            [
                'answer' => 'Siglo XVI',
                'status' => true,
                'questions_id' => 3
            ],
            [
                'answer' => 'Siglo XVII',
                'status' => false,
                'questions_id' => 3
            ],
            [
                'answer' => 'Siglo XV',
                'status' => false,
                'questions_id' => 3
            ],
            [
                'answer' => 'Siglo XIV',
                'status' => false,
                'questions_id' => 3
            ],
            /* pregunta 4 */
            [
                'answer' => 'Austria',
                'status' => true,
                'questions_id' => 4
            ],
            [
                'answer' => 'Suiza',
                'status' => false,
                'questions_id' => 4
            ],
            [
                'answer' => 'Alemania',
                'status' => false,
                'questions_id' => 4
            ],
            [
                'answer' => 'Polonia',
                'status' => false,
                'questions_id' => 4
            ],
            /* pregunta 5 */
            [
                'answer' => 'Partenon',
                'status' => true,
                'questions_id' => 5
            ],
            [
                'answer' => 'Gran Piramide de Guiza',
                'status' => false,
                'questions_id' => 5
            ],
            [
                'answer' => 'Templo de Artemisa',
                'status' => false,
                'questions_id' => 5
            ],
            [
                'answer' => 'Jardines colgantes de Bablinonia',
                'status' => false,
                'questions_id' => 5
            ],
        ];
        $Geografia = [
            [
                'answer' => '5',
                'status' => true,
                'questions_id' => 6
            ],
            [
                'answer' => '3',
                'status' => false,
                'questions_id' => 6
            ],
            [
                'answer' => '7',
                'status' => false,
                'questions_id' => 6
            ],
            [
                'answer' => '4',
                'status' => false,
                'questions_id' => 6
            ],
            /* pregunta 7 */
            [
                'answer' => 'Ganges',
                'status' => false,
                'questions_id' => 7
            ],
            [
                'answer' => 'Danubio',
                'status' => false,
                'questions_id' => 7
            ],
            [
                'answer' => 'Amazonas',
                'status' => true,
                'questions_id' => 7
            ],
            [
                'answer' => 'Nilo',
                'status' => false,
                'questions_id' => 7
            ],
            /* pregunta 8 */
            [
                'answer' => 'Antartida',
                'status' => false,
                'questions_id' => 8
            ],
            [
                'answer' => 'Centro America',
                'status' => false,
                'questions_id' => 8
            ],
            [
                'answer' => 'America del sur',
                'status' => true,
                'questions_id' => 8
            ],
            [
                'answer' => 'America del norte',
                'status' => false,
                'questions_id' => 8
            ],
            /* pregunta 9 */
            [
                'answer' => 'Antartida',
                'status' => false,
                'questions_id' => 9
            ],
            [
                'answer' => 'Africa',
                'status' => false,
                'questions_id' => 9
            ],
            [
                'answer' => 'America',
                'status' => false,
                'questions_id' => 9
            ],
            [
                'answer' => 'Asia',
                'status' => true,
                'questions_id' => 9
            ],
            /* pregunta 10 */
            [
                'answer' => 'Israel',
                'status' => false,
                'questions_id' => 10
            ],
            [
                'answer' => 'Turquia',
                'status' => true,
                'questions_id' => 10
            ],
            [
                'answer' => 'Arabia',
                'status' => false,
                'questions_id' => 10
            ],
            [
                'answer' => 'Marruecos',
                'status' => false,
                'questions_id' => 10
            ],
        ];
        $Deportes = [
            [
                'answer' => 'Tennis',
                'status' => false,
                'questions_id' => 11
            ],
            [
                'answer' => 'Futbol',
                'status' => true,
                'questions_id' => 11
            ],
            [
                'answer' => 'Baloncesto',
                'status' => false,
                'questions_id' => 11
            ],
            [
                'answer' => 'Voleibol',
                'status' => false,
                'questions_id' => 11
            ],
            /* pregunta 12 */
            [
                'answer' => 'Tennis',
                'status' => false,
                'questions_id' => 12
            ],
            [
                'answer' => 'Pelota',
                'status' => false,
                'questions_id' => 12
            ],
            [
                'answer' => 'Voleibol',
                'status' => true,
                'questions_id' => 12
            ],
            [
                'answer' => 'Baloncesto',
                'status' => false,
                'questions_id' => 12
            ],
            /* pregunta 13 */
            [
                'answer' => 'Asfa Powell',
                'status' => false,
                'questions_id' => 13
            ],
            [
                'answer' => 'Julian Muñoz',
                'status' => false,
                'questions_id' => 13
            ],
            [
                'answer' => 'Yohan Blake',
                'status' => false,
                'questions_id' => 13
            ],
            [
                'answer' => 'Usaint Bolt',
                'status' => true,
                'questions_id' => 13
            ],
            /* pregunta 14 */
            [
                'answer' => 'Futbol',
                'status' => false,
                'questions_id' => 14
            ],
            [
                'answer' => 'Beisbol',
                'status' => true,
                'questions_id' => 14
            ],
            [
                'answer' => 'Pantineta',
                'status' => false,
                'questions_id' => 14
            ],
            [
                'answer' => 'Hockey',
                'status' => false,
                'questions_id' => 14
            ],
            /* pregunta 15 */
            [
                'answer' => '40 minutos',
                'status' => false,
                'questions_id' => 15
            ],
            [
                'answer' => '20 minutos',
                'status' => true,
                'questions_id' => 15
            ],
            [
                'answer' => 'Media hora',
                'status' => false,
                'questions_id' => 15
            ],
            [
                'answer' => '1 hora',
                'status' => false,
                'questions_id' => 15
            ],
        ];
        $Entretenimiento = [
            [
                'answer' => 'Universal',
                'status' => false,
                'questions_id' => 16
            ],
            [
                'answer' => 'Marvel',
                'status' => true,
                'questions_id' => 16
            ],
            [
                'answer' => 'DC',
                'status' => false,
                'questions_id' => 16
            ],
            [
                'answer' => 'Dreamworks',
                'status' => false,
                'questions_id' => 16
            ],
            /* pregunta 17 */
            [
                'answer' => 'Ant-Man',
                'status' => false,
                'questions_id' => 17
            ],
            [
                'answer' => 'Wanda Maximoff',
                'status' => false,
                'questions_id' => 17
            ],
            [
                'answer' => 'Lex luthor',
                'status' => true,
                'questions_id' => 17
            ],
            [
                'answer' => 'Capitana Marvel',
                'status' => false,
                'questions_id' => 17
            ],
            /* pregunta 18 */
            [
                'answer' => 'Gravity Falls',
                'status' => false,
                'questions_id' => 18
            ],
            [
                'answer' => 'Stranger Things',
                'status' => true,
                'questions_id' => 18
            ],
            [
                'answer' => 'Ninguna de las anteriores',
                'status' => false,
                'questions_id' => 18
            ],
            [
                'answer' => 'Amphibia',
                'status' => false,
                'questions_id' => 18
            ],
            /* pregunta 19 */
            [
                'answer' => 'Jason Statham',
                'status' => false,
                'questions_id' => 19
            ],
            [
                'answer' => 'Mario Fortino',
                'status' => false,
                'questions_id' => 19
            ],
            [
                'answer' => 'Rowan Atkinson',
                'status' => true,
                'questions_id' => 19
            ],
            [
                'answer' => 'Javier Bardem',
                'status' => false,
                'questions_id' => 19
            ],
            /* pregunta 20 */
            [
                'answer' => 'Mulan',
                'status' => false,
                'questions_id' => 20
            ],
            [
                'answer' => 'Pocahontas',
                'status' => false,
                'questions_id' => 20
            ],
            [
                'answer' => 'Aladdín',
                'status' => true,
                'questions_id' => 20
            ],
            [
                'answer' => 'Hercules',
                'status' => false,
                'questions_id' => 20
            ],
        ];
        $programacion = [
            [
                'answer' => 'Saca un error en el código',
                'status' => false,
                'questions_id' => 21
            ],
            [
                'answer' => 'El plan no se puede definir',
                'status' => true,
                'questions_id' => 21
            ],
            [
                'answer' => 'El plan es el básico',
                'status' => false,
                'questions_id' => 21
            ],
            [
                'answer' => 'El plan es según el consumidor',
                'status' => false,
                'questions_id' => 21
            ],
            /* pregunta 22 */
            [
                'answer' => 'flor x in range(1,5)',
                'status' => false,
                'questions_id' => 22
            ],
            [
                'answer' => 'while true:',
                'status' => false,
                'questions_id' => 22
            ],
            [
                'answer' => 'lopp:',
                'status' => false,
                'questions_id' => 22
            ],
            [
                'answer' => 'for x in range(1,5):',
                'status' => true,
                'questions_id' => 22
            ],
            /* pregunta 23 */
            [
                'answer' => 't=timelocaltime()',
                'status' => false,
                'questions_id' => 23
            ],
            [
                'answer' => 't:time.localtime()',
                'status' => false,
                'questions_id' => 23
            ],
            [
                'answer' => 't=time.localtime()',
                'status' => true,
                'questions_id' => 23
            ],
            [
                'answer' => 't=time.localtime',
                'status' => false,
                'questions_id' => 23
            ],
            /* pregunta 24 */
            [
                'answer' => 'Usamos la orden "add"',
                'status' => false,
                'questions_id' => 24
            ],
            [
                'answer' => 'Escribirmos el signo matematico "+"',
                'status' => false,
                'questions_id' => 24
            ],
            [
                'answer' => 'Usamos el metodo "append"',
                'status' => true,
                'questions_id' => 24
            ],
            [
                'answer' => 'Usamos el metodo "add"',
                'status' => false,
                'questions_id' => 24
            ],
            /* pregunta 25 */
            [
                'answer' => 'letras y numeros',
                'status' => false,
                'questions_id' => 25
            ],
            [
                'answer' => 'letras de la "A" a la "D"',
                'status' => false,
                'questions_id' => 25
            ],
            [
                'answer' => 'numeros del 1 al 10',
                'status' => false,
                'questions_id' => 25
            ],
            [
                'answer' => 'ceros y unos',
                'status' => true,
                'questions_id' => 25
            ],
        ];
        $array = array_merge($Historia, $Geografia, $Deportes, $Entretenimiento, $programacion);
        foreach ($array as $key => $item) {
            $answers = Answer::create([
                'answer' => $item['answer'],
                'status' => $item['status'],
                'questions_id' => $item['questions_id']
            ]);
        }

    }
}
