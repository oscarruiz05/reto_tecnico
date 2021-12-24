<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Historia',
                'difficulty' => 'pricipiante',
                'score' => 10
            ],
            [
                'name' => 'Geografía',
                'difficulty' => 'facil',
                'score' => 60
            ],
            [
                'name' => 'Deportes',
                'difficulty' => 'intermedio',
                'score' => 100
            ],
            [
                'name' => 'Entretenimiento',
                'difficulty' => 'dificil',
                'score' => 200
            ],
            [
                'name' => 'Programción',
                'difficulty' => 'complicado',
                'score' => 300
            ],
        ];

        foreach ($categories as $key => $cat) {
            $category = Category::create([
                'name' => $cat['name'],
                'difficulty' => $cat['difficulty'],
                'score' => $cat['score']
            ]);
            $category->save();
        }
    }
}
