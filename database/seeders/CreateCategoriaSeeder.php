<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_categoria;


class CreateCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = [
            [
                'id' => 1,
                'classificazione'  =>'Elettrico'
            ],
            [
                'id' => 2,
                'classificazione'  =>'Informatico'
            ],
            [
                'id' => 3,
                'classificazione'  =>'Sanitario'
            ],
            [
                'id' => 4,
                'classificazione'  =>'Strutturale'
            ]
        ];
              
        foreach ($categoria as $key => $value) {
            M_categoria::create($value);
            }
    }
}
