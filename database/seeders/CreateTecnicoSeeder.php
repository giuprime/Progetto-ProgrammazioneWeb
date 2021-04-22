<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_tecnico;


class CreateTecnicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tecnico = [
                        [
                        'id' => 97,
                        'nome'  => 'Paolo',
                        'cognome'  => 'Messina',
                        'email' => 'paolo.messina@unime.it',
                        'numero_di_telefono' => '3784512362',
                        'inizio_contratto' => '2020-01-07',
                        'fine_contratto' => '2024-01-07',
                        'specializzazione'=> 'Edilizia',
                        'id_dipartimento'=> 1
                        ],
                        [
                        'id' => 98,
                        'nome'  => 'Mario',
                        'cognome'  => 'Rossi',
                        'email' => 'mario.rossi@unime.it',
                        'numero_di_telefono' => '3452175987',
                        'inizio_contratto' => '2019-12-02',
                        'fine_contratto' => '2022-05-05',
                        'specializzazione'=> 'Elettricista',
                        'id_dipartimento'=> 1
                        ],
                        [
                        'id' => 99,
                        'nome'  => 'Francesco',
                        'cognome'  => 'Bianchi',
                        'email' => 'francesco.bianchi@unime.it',
                        'numero_di_telefono' => '3217865412',
                        'inizio_contratto' => '2020-03-08',
                        'fine_contratto' => '2022-04-08',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 1
                        ],
                        [
                        'id' => 100,
                        'nome'  => 'Marco',
                        'cognome'  => 'Verdi',
                        'email' => 'marco.verdi@unime.it',
                        'numero_di_telefono' => '3469574152',
                        'inizio_contratto' => '2019-06-03',
                        'fine_contratto' => '2021-06-02',
                        'specializzazione'=> 'Idraulico',
                        'id_dipartimento'=> 1
                        ],
                        [
                        'id' => 101,
                        'nome'  => 'Alessandro',
                        'cognome'  => 'Ferrari',
                        'email' => 'alessandro.ferrari@unime.it',
                        'numero_di_telefono' => '3549685475',
                        'inizio_contratto' => '2018-04-01',
                        'fine_contratto' => '2022-04-01',
                        'specializzazione'=> 'Elettricista',
                        'id_dipartimento'=> 2
                        ],
                        [
                        'id' => 102,
                        'nome'  => 'Elena',
                        'cognome'  => 'Gallo',
                        'email' => 'elena.gallo@unime.it',
                        'numero_di_telefono' => '3487425820',
                        'inizio_contratto' => '2017-04-15',
                        'fine_contratto' => '2021-04-15',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 2
                        ],
                        [
                        'id' => 103,
                        'nome'  => 'Federica',
                        'cognome'  => 'Romano',
                        'email' => 'federica.romano@unime.it',
                        'numero_di_telefono' => '3475123232',
                        'inizio_contratto' => '2018-10-03',
                        'fine_contratto' => '2022-10-03',
                        'specializzazione'=> 'Idraulico',
                        'id_dipartimento'=> 2
                        ],
                        [
                        'id' => 104,
                        'nome'  => 'Mario',
                        'cognome'  => 'Russo',
                        'email' => 'mario.russo@unime.it',
                        'numero_di_telefono' => '3491072589',
                        'inizio_contratto' => '2017-11-08',
                        'fine_contratto' => '2021-11-08',
                        'specializzazione'=> 'Edilizia',
                        'id_dipartimento'=> 2
                        ],
                        [
                        'id' => 105,
                        'nome'  => 'Adriano',
                        'cognome'  => 'Esposito',
                        'email' => 'adriano.esposito@unime.it',
                        'numero_di_telefono' => '3202596874',
                        'inizio_contratto' => '2019-05-17',
                        'fine_contratto' => '2023-05-17',
                        'specializzazione'=> 'Elettricista',
                        'id_dipartimento'=> 3
                        ],
                        [
                        'id' => 106,
                        'nome'  => 'Salvatore',
                        'cognome'  => 'Greco',
                        'email' => 'salvatore.greco@unime.it',
                        'numero_di_telefono' => '3455896785',
                        'inizio_contratto' => '2020-01-21',
                        'fine_contratto' => '2024-01-21',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 3
                        ],
                        [
                        'id' => 107,
                        'nome'  => 'Michelangelo',
                        'cognome'  => 'Colombo',
                        'email' => 'michelangelo.colombo@unime.it',
                        'numero_di_telefono' => '3359069840',
                        'inizio_contratto' => '2017-12-10',
                        'fine_contratto' => '2021-12-10',
                        'specializzazione'=> 'Idraulico',
                        'id_dipartimento'=> 3
                        ],
                        [
                        'id' => 108,
                        'nome'  => 'Bartolo',
                        'cognome'  => 'Mancini',
                        'email' => 'bartolo.mancini@unime.it',
                        'numero_di_telefono' => '3496525632',
                        'inizio_contratto' => '2018-02-26',
                        'fine_contratto' => '2022-02-26',
                        'specializzazione'=> 'Edilizia',
                        'id_dipartimento'=> 3
                        ],
                        [
                        'id' => 109,
                        'nome'  => 'Sebastiano',
                        'cognome'  => 'Ferrara',
                        'email' => 'sebastiano.ferrara@unime.it',
                        'numero_di_telefono' => '3331785050',
                        'inizio_contratto' => '2017-03-24',
                        'fine_contratto' => '2021-03-24',
                        'specializzazione'=> 'Elettricista',
                        'id_dipartimento'=> 4
                        ],
                        [
                        'id' => 110,
                        'nome'  => 'Fabrizio',
                        'cognome'  => 'Santoro',
                        'email' => 'fabrizio.santoro@unime.it',
                        'numero_di_telefono' => '3365478124',
                        'inizio_contratto' => '2018-09-02',
                        'fine_contratto' => '2022-09-02',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 4
                        ],
                        [
                        'id' => 111,
                        'nome'  => 'Anselmo',
                        'cognome'  => 'Marini',
                        'email' => 'anselmo.marini@unime.it',
                        'numero_di_telefono' => '3349685475',
                        'inizio_contratto' => '2019-06-22',
                        'fine_contratto' => '2023-06-22',
                        'specializzazione'=> 'Idraulico',
                        'id_dipartimento'=> 4
                        ],
                        [
                        'id' => 112,
                        'nome'  => 'Matteo',
                        'cognome'  => 'Conte',
                        'email' => 'matteo.conte@unime.it',
                        'numero_di_telefono' => '3398975741',
                        'inizio_contratto' => '2019-10-05',
                        'fine_contratto' => '2023-10-05',
                        'specializzazione'=> 'Edilizia',
                        'id_dipartimento'=> 4
                        ],
                        [
                        'id' => 113,
                        'nome'  => 'Ettore',
                        'cognome'  => 'Serra',
                        'email' => 'ettore.serra@unime.it',
                        'numero_di_telefono' => '3339823517',
                        'inizio_contratto' => '2020-02-05',
                        'fine_contratto' => '2024-02-05',
                        'specializzazione'=> 'Elettricista',
                        'id_dipartimento'=> 5
                        ],
                        [
                        'id' => 114,
                        'nome'  => 'Silvia',
                        'cognome'  => 'Leone',
                        'email' => 'siliva.leone@unime.it',
                        'numero_di_telefono' => '3329683275',
                        'inizio_contratto' => '2018-11-09',
                        'fine_contratto' => '2022-11-09',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 5
                        ],
                        [
                        'id' => 115,
                        'nome'  => 'Carmine',
                        'cognome'  => 'Barbieri',
                        'email' => 'carmine.barbieri@unime.it',
                        'numero_di_telefono' => '3494125412',
                        'inizio_contratto' => '2018-09-27',
                        'fine_contratto' => '2022-09-27',
                        'specializzazione'=> 'Idraulico',
                        'id_dipartimento'=> 5
                        ],
                        [
                        'id' => 116,
                        'nome'  => 'Tommaso',
                        'cognome'  => 'Ferri',
                        'email' => 'tommaso.ferri@unime.it',
                        'numero_di_telefono' => '3312541542',
                        'inizio_contratto' => '2019-04-12',
                        'fine_contratto' => '2023-04-12',
                        'specializzazione'=> 'Edilizia',
                        'id_dipartimento'=> 5
                        ],
                        [
                        'id' => 117,
                        'nome'  => 'Valerio',
                        'cognome'  => 'Mazza',
                        'email' => 'valerio.mazza@unime.it',
                        'numero_di_telefono' => '3494134454',
                        'inizio_contratto' => '2017-06-15',
                        'fine_contratto' => '2021-06-15',
                        'specializzazione'=> 'Elettricista',
                        'id_dipartimento'=> 6
                        ],
                        [
                        'id' => 118,
                        'nome'  => 'Flavia',
                        'cognome'  => 'Vitale',
                        'email' => 'flavia.vitale@unime.it',
                        'numero_di_telefono' => '3456985475',
                        'inizio_contratto' => '2018-05-29',
                        'fine_contratto' => '2022-05-29',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 6
                        ],
                        [
                        'id' => 119,
                        'nome'  => 'Bruno',
                        'cognome'  => 'Parisi',
                        'email' => 'bruno.parisi@unime.it',
                        'numero_di_telefono' => '3911257485',
                        'inizio_contratto' => '2018-03-21',
                        'fine_contratto' => '2022-03-21',
                        'specializzazione'=> 'Idraulico',
                        'id_dipartimento'=> 6
                        ],
                        [
                        'id' => 120,
                        'nome'  => 'Umberto',
                        'cognome'  => 'Martino',
                        'email' => 'umberto.martino@unime.it',
                        'numero_di_telefono' => '3317585254',
                        'inizio_contratto' => '2020-02-16',
                        'fine_contratto' => '2024-02-16',
                        'specializzazione'=> 'Edilizia',
                        'id_dipartimento'=> 6
                        ],
                        [
                        'id' => 121,
                        'nome'  => 'Michele',
                        'cognome'  => 'Violi',
                        'email' => 'michele.violi@unime.it',
                        'numero_di_telefono' => '3998136951',
                        'inizio_contratto' => '2018-11-08',
                        'fine_contratto' => '2022-11-08',
                        'specializzazione'=> 'Elettricista',
                        'id_dipartimento'=> 7
                        ],
                        [
                        'id' => 122,
                        'nome'  => 'Clemente',
                        'cognome'  => 'Silvestri',
                        'email' => 'clemente.silvestri@unime.it',
                        'numero_di_telefono' => '3517464259',
                        'inizio_contratto' => '2019-06-02',
                        'fine_contratto' => '2023-06-02',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 7
                        ],
                        [
                        'id' => 123,
                        'nome'  => 'Emanuele',
                        'cognome'  => 'Pellegrino',
                        'email' => 'emanuele.pellegrino@unime.it',
                        'numero_di_telefono' => '3341937826',
                        'inizio_contratto' => '2017-12-19',
                        'fine_contratto' => '2021-12-19',
                        'specializzazione'=>  'Idraulico',
                        'id_dipartimento'=> 7
                        ],
                        [
                        'id' => 124,
                        'nome'  => 'Santo',
                        'cognome'  =>  'Barone',
                        'email' =>  'santo.barone@unime.it',
                        'numero_di_telefono' =>  '3494130520',
                        'inizio_contratto' => '2019-07-11',
                        'fine_contratto' => '2023-07-11',
                        'specializzazione'=>  'Edilizia',
                        'id_dipartimento'=> 7
                        ],
                        [
                        'id' => 125,
                        'nome'  =>  'Francesco',
                        'cognome'  => 'Piazza',
                        'email' => 'francesco.piazza@unime.it',
                        'numero_di_telefono' => '3908641356',
                        'inizio_contratto' => '2019-05-30',
                        'fine_contratto' =>  '2023-05-30',
                        'specializzazione'=>  'Elettricista',
                        'id_dipartimento'=> 8
                        ],
                        [
                        'id' => 126,
                        'nome'  =>  'Ferdinando',
                        'cognome'  => 'Moro',
                        'email' =>  'ferdinando.moro@unime.it',
                        'numero_di_telefono' => '3494095781',
                        'inizio_contratto' =>  '2017-03-28',
                        'fine_contratto' =>  '2021-03-28',
                        'specializzazione'=>  'Informatico',
                        'id_dipartimento'=> 8
                        ],
                        [
                        'id' => 127,
                        'nome'  => 'Armando',
                        'cognome'  => 'Caputo',
                        'email' => 'armando.caputo@unime.it',
                        'numero_di_telefono' => '3356955475',
                        'inizio_contratto' =>  '2018-01-28',
                        'fine_contratto' =>  '2022-01-28',
                        'specializzazione'=> 'Idraulico',
                        'id_dipartimento'=> 8
                        ],
                        [
                        'id' => 128,
                        'nome'  => 'Daniele',
                        'cognome'  =>  'Giuliani',
                        'email' => 'daniele.giuliani@unime.it',
                        'numero_di_telefono' => '3302586741',
                        'inizio_contratto' => '2018-07-18',
                        'fine_contratto' => '2022-07-18',
                        'specializzazione'=> 'Edilizia',
                        'id_dipartimento'=> 8
                        ],
                        [
                        'id' => 129,
                        'nome'  =>  'Elisabetta',
                        'cognome'  =>  'Sala',
                        'email' =>  'elisabetta.sala@unime.it',
                        'numero_di_telefono' => '3447531965',
                        'inizio_contratto' => '2020-02-18',
                        'fine_contratto' => '2024-02-18',
                        'specializzazione'=> 'Elettricista',
                        'id_dipartimento'=> 9
                        ],
                        [
                        'id' => 130,
                        'nome'  => 'Costanzo',
                        'cognome'  =>  'Battaglia',
                        'email' =>  'costanzo.battaglia@unime.it',
                        'numero_di_telefono' => '3897541690',
                        'inizio_contratto' => '2017-06-06',
                        'fine_contratto' => '2021-06-06',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 9
                        ],
                        [
                        'id' => 131,
                        'nome'  => 'Augusto',
                        'cognome'  => 'Poli',
                        'email' =>  'augusto.poli@unime.it',
                        'numero_di_telefono' => '3332598756',
                        'inizio_contratto' => '2019-09-17',
                        'fine_contratto' => '2023-09-17',
                        'specializzazione'=> 'Idraulico',
                        'id_dipartimento'=> 9
                        ],
                        [
                        'id' => 132,
                        'nome'  => 'Edoardo',
                        'cognome'  => 'Alberti',
                        'email' => 'edoardo.alberti@unime.it',
                        'numero_di_telefono' => '3455896512',
                        'inizio_contratto' =>  '2019-10-16',
                        'fine_contratto' =>  '2023-10-16',
                        'specializzazione'=> 'Edilizia',
                        'id_dipartimento'=> 9
                        ],
                        [
                        'id' => 133,
                        'nome'  =>  'Benito',
                        'cognome'  =>  'Romeo',
                        'email' => 'benito.romeo@unime.it',
                        'numero_di_telefono' => '3496674514',
                        'inizio_contratto' =>  '2020-01-13',
                        'fine_contratto' =>  '2024-01-13',
                        'specializzazione'=>  'Elettricista',
                        'id_dipartimento'=> 10
                        ],
                        [
                        'id' => 134,
                        'nome'  => 'Antonio',
                        'cognome'  => 'Rossi',
                        'email' => 'antonio.rossi@unime.it',
                        'numero_di_telefono' => '3485175269',
                        'inizio_contratto' => '2017-07-01',
                        'fine_contratto' => '2021-07-01',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 10
                        ],
                        [
                        'id' => 135,
                        'nome'  => 'Giovanni',
                        'cognome'  => 'Lorenzini',
                        'email' => 'giovanni.lorenzini@unime.it',
                        'numero_di_telefono' => '3319870410',
                        'inizio_contratto' => '2019-05-17',
                        'fine_contratto' => '2023-05-17',
                        'specializzazione'=> 'Idraulico',
                        'id_dipartimento'=> 10
                        ],
                        [
                        'id' => 136,
                        'nome'  => 'Armando',
                        'cognome'  => 'Catanese',
                        'email' => 'armando.catanese@unime.it',
                        'numero_di_telefono' => '3455040210',
                        'inizio_contratto' => '2019-04-23',
                        'fine_contratto' => '2023-04-23',
                        'specializzazione'=>  'Edilizia',
                        'id_dipartimento'=> 10
                        ],
                        [
                        'id' => 137,
                        'nome'  => 'Raffaele',
                        'cognome'  => 'Benedetti',
                        'email' => 'raffaele.benedetti@unime.it',
                        'numero_di_telefono' => '3881594095',
                        'inizio_contratto' => '2018-12-16',
                        'fine_contratto' => '2022-12-16',
                        'specializzazione'=> 'Elettricista',
                        'id_dipartimento'=> 11
                        ],
                        [
                        'id' => 138,
                        'nome'  =>  'Diego',
                        'cognome'  => 'Spinelli',
                        'email' => 'diego.spinelli@unime.it',
                        'numero_di_telefono' => '3489571025',
                        'inizio_contratto' => '2018-04-27',
                        'fine_contratto' => '2022-04-27',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 11
                        ],
                        [
                        'id' => 139,
                        'nome'  => 'Cosimo',
                        'cognome'  =>  'Bassi',
                        'email' =>  'cosimo.bassi@unime.it',
                        'numero_di_telefono' =>  '3880881745',
                        'inizio_contratto' => '2019-08-30',
                        'fine_contratto' => '2023-08-30',
                        'specializzazione'=> 'Idraulico',
                        'id_dipartimento'=> 11
                        ],
                        [
                        'id' => 140,
                        'nome'  =>  'Enzo',
                        'cognome'  =>  'Valente',
                        'email' => 'enzo.valente@unime.it',
                        'numero_di_telefono' => '3914525951',
                        'inizio_contratto' => '2017-09-15',
                        'fine_contratto' => '2021-09-15',
                        'specializzazione'=> 'Edilizia',
                        'id_dipartimento'=> 11
                        ],
                        [
                        'id' => 141,
                        'nome'  => 'Fiorella',
                        'cognome'  => 'Coppola',
                        'email' => 'fiorella.coppola@unime.it',
                        'numero_di_telefono' => '3543685475',
                        'inizio_contratto' => '2018-09-13',
                        'fine_contratto' => '2022-09-13',
                        'specializzazione'=>  'Elettricista',
                        'id_dipartimento'=> 12
                        ],
                        [
                        'id' => 142,
                        'nome'  =>  'Attilio',
                        'cognome'  =>  'Molinari',
                        'email' => 'attilio.molinari@unime.it',
                        'numero_di_telefono' => '3475125632',
                        'inizio_contratto' => '2020-01-17',
                        'fine_contratto' =>  '2024-01-17',
                        'specializzazione'=> 'Informatico',
                        'id_dipartimento'=> 12
                        ],
                        [
                        'id' => 143,
                        'nome'  => 'Domenico',
                        'cognome'  => 'Moretti',
                        'email' => 'domenico.moretti@unime.it',
                        'numero_di_telefono' => '3470082654',
                        'inizio_contratto' =>  '2017-03-19',
                        'fine_contratto' =>   '2021-03-19',
                        'specializzazione'=>  'Idraulico',
                        'id_dipartimento'=> 12
                        ],
                        [
                        'id' => 144,
                        'nome'  =>  'Davide',
                        'cognome'  => 'Rizzo',
                        'email' => 'davide.rizzo@unime.it',
                        'numero_di_telefono' => '3501485742',
                        'inizio_contratto' => '2019-07-08',
                        'fine_contratto' => '2023-07-08',
                        'specializzazione'=> 'Edilizia',
                        'id_dipartimento'=> 12
                        ],

            ];
        foreach ($tecnico as $key => $value) {
            M_tecnico::create($value);
            }

    }
}
