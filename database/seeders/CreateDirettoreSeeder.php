<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_direttore;


class CreateDirettoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $direttore = [
            [
                'id' => 1, 
                'nome'  => 'Mario', 
                'cognome'  => 'Bolognari', 						
                'email' => 'mario.bolognari@unime.it', 
                'numero_di_telefono' => '0906766359', 
                'inizio_mandato' => '2019-11-04', 
                'fine_mandato' => '2023-07-08'
            ],
            [
                'id' => 2, 
                'nome'  => 'Augusto', 
                'cognome'  => 'D\'amico', 						
                'email' => 'damicoa@unime.it', 
                'numero_di_telefono' => '0906767105', 
                'inizio_mandato' => '2018-10-14', 
                'fine_mandato' => '2022-10-14'
            ],
            [
                'id' => 3, 
                'nome'  => 'Giancarlo', 
                'cognome'  => 'De Vero', 						
                'email' => 'giancarlo.devero@unime.it', 
                'numero_di_telefono' => '0906764313', 
                'inizio_mandato' => '2020-01-05',
                'fine_mandato' => '2024-01-05'
            ],
            [
                'id' => 4, 
                'nome'  => 'Antonino', 
                'cognome'  => 'D\'Andrea', 						
                'email' => 'adandrea@unime.it', 
                'numero_di_telefono' => '0903977157', 
                'inizio_mandato' => '2017-07-08',
                'fine_mandato' => '2021-07-08'
            ],
            [
                'id' => 5, 
                'nome'  => 'Domenico', 
                'cognome'  => 'Cucinotta', 						
                'email' => 'domenico.cucinotta@unime.it', 
                'numero_di_telefono' => '0902212390', 
                'inizio_mandato' => '2018-04-26',
                'fine_mandato' => '2022-04-26'
            ],
            [
                'id' => 6, 
                'nome'  => 'Francesco', 
                'cognome'  => 'Stagno D\'Alcontres', 						
                'email' => 'fstagnodalcontres@unime.it', 
                'numero_di_telefono' => '0902212585', 
                'inizio_mandato' => '2019-09-18',
                'fine_mandato' => '2023-09-18'
            ],
            [
                'id' => 7, 
                'nome'  => 'Giuseppe Pio', 
                'cognome'  => 'Anastasi', 						
                'email' => 'anastasi.giuseppe@unime.it', 
                'numero_di_telefono' => '0902213361', 
                'inizio_mandato' => '2018-05-21',
                'fine_mandato' => '2022-05-21'
            ],
            [
                'id' => 8, 
                'nome'  => 'Giovanni', 
                'cognome'  => 'Grassi', 						
                'email' => 'giovanni.grassi@unime.it', 
                'numero_di_telefono' => '0906765513', 
                'inizio_mandato' => '2020-02-17',
                'fine_mandato' => '2024-02-17'
            ],
            [
                'id' => 9, 
                'nome'  => 'Antonino', 
                'cognome'  => 'Pennisi', 						
                'email' => 'antonio.pennisi@unime.it', 
                'numero_di_telefono' => '0906765191', 
                'inizio_mandato' => '2017-10-09',
                'fine_mandato' => '2021-10-09'
            ],
            [
                'id' => 10, 
                'nome'  => 'Fortunato', 
                'cognome'  => 'Neri', 						
                'email' => 'fortunato.neri@unime.it', 
                'numero_di_telefono' => '0906765030', 
                'inizio_mandato' => '2019-06-30',
                'fine_mandato' => '2023-06-30'
            ],
            [
                'id' => 11, 
                'nome'  => 'Giovanni', 
                'cognome'  => 'Moschella', 						
                'email' => 'giovanni.moschella@unime.it', 
                'numero_di_telefono' => '0906768931', 
                'inizio_mandato' => '2018-11-25',
                'fine_mandato' => '2022-11-25'
            ],
            [
                'id' => 12, 
                'nome'  => 'Antonio', 
                'cognome'  => 'Panebianco', 						
                'email' => 'antonio.panebianco@unime.it', 
                'numero_di_telefono' => '0903503762', 
                'inizio_mandato' => '2019-12-10',
                'fine_mandato' => '2023-12-10'
            ]

        ];
        foreach ($direttore as $key => $value) {
            M_direttore::create($value);
            }
    
    }
}
