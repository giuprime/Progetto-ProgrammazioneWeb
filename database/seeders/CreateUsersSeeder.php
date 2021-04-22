<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'id'=>'1',
               'name'=>'Mario Bolognari',
               'email'=>'mario.bolognari@unime.it',
               'password'=> bcrypt('Bolognari'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'2',
               'name'=>'Augusto D\'amico',
               'email'=>'damicoa@unime.it',
               'password'=> bcrypt('Damico'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'3',
               'name'=>'Giancarlo De Vero ',
               'email'=>'giancarlo.devero@unime.it',
               'password'=> bcrypt('Devero'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'4',
               'name'=>'Antonino D\'Andrea',
               'email'=>'adandrea@unime.it',
               'password'=> bcrypt('Dandrea'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'5',
               'name'=>'Domenico Cucinotta',
               'email'=>'domenico.cucinotta@unime.it',
               'password'=> bcrypt('Cucinotta'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'6',
               'name'=>'Francesco Stagno D\'Alcontres',
               'email'=>'fstagnodalcontres@unime.it',
               'password'=> bcrypt('Stagnodalcontres'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'7',
               'name'=>'Giuseppe Pio Anastasi',
               'email'=>'anastasi.giuseppe@unime.it',
               'password'=> bcrypt('Anastasi'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'8',
               'name'=>'Giovanni Grassi',
               'email'=>'giovanni.grassi@unime.it',
               'password'=> bcrypt('Grassi'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'9',
               'name'=>'Antonino Pennisi',
               'email'=>'antonio.pennisi@unime.it',
               'password'=> bcrypt('Pennisi'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'10',
               'name'=>'Fortunato Neri',
               'email'=>'fortunato.neri@unime.it',
               'password'=> bcrypt('Neri'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'11',
               'name'=>'Giovanni Moschella',
               'email'=>'giovanni.moschella@unime.it',
               'password'=> bcrypt('Moschella'),
               'utype'=>'ADM'
            ],
            [
               'id'=>'12',
               'name'=>'Antonio Panebianco',
               'email'=>'antonio.panebianco@unime.it',
               'password'=> bcrypt('Panebianco'),
               'utype'=>'ADM'
            ],
            [
               'name'=>'Paolo Messina',
               'email'=>'paolo.messina@unime.it',
               'password'=> bcrypt('Messina'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Mario Rossi',
               'email'=>'mario.rossi@unime.it',
               'password'=> bcrypt('Rossi'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Francesco Bianchi',
               'email'=>'francesco.bianchi@unime.it',
               'password'=> bcrypt('Bianchi'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Marco Verdi',
               'email'=>'marco.verdi@unime.it',
               'password'=> bcrypt('Verdi'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Alessandro Ferrari',
               'email'=>'alessandro.ferrari@unime.it',
               'password'=> bcrypt('Ferrari'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Elena Gallo',
               'email'=>'elena.gallo@unime.it',
               'password'=> bcrypt('Gallo'),
               'utype'=>'USR'
            ],

            [
               'name'=>'Federica Romano',
               'email'=>'@federica.romano@unime.it',
               'password'=> bcrypt('Romano'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Mario Russo',
               'email'=>'mario.russo@unime.it',
               'password'=> bcrypt('Russo'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Adriano Esposito',
               'email'=>'adriano.esposito@unime.it',
               'password'=> bcrypt('Esposito'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Salvatore Greco',
               'email'=>'salvatore.greco@unime.it',
               'password'=> bcrypt('Greco'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Michelangelo Colombo',
               'email'=>'michelangelo.colombo@unime.it',
               'password'=> bcrypt('Colombo'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Bartolo Mancini',
               'email'=>'bartolo.mancini@unime.it',
               'password'=> bcrypt('Mancini'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Sebastiano Ferrara',
               'email'=>'sebastiano.ferrara@unime.it',
               'password'=> bcrypt('Ferrara'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Fabrizio Santoro',
               'email'=>'fabrizio.santoro@unime.it',
               'password'=> bcrypt('Santoro'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Anselmo Marini',
               'email'=>'anselmo.marini@unime.it',
               'password'=> bcrypt('Marini'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Matteo Conte',
               'email'=>'matteo.conte@unime.it',
               'password'=> bcrypt('Conte'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Ettore Serra',
               'email'=>'ettore.serra@unime.it',
               'password'=> bcrypt('Serra'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Silvia Leone',
               'email'=>'silvia.leone@unime.it',
               'password'=> bcrypt('Leone'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Carmine Barbieri',
               'email'=>'carmine.barbieri@unime.it',
               'password'=> bcrypt('Barbieri'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Tommaso Ferri',
               'email'=>'tommaso.ferri@unime.it',
               'password'=> bcrypt('Ferri'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Valerio Mazza',
               'email'=>'valerio.mazza@unime.it',
               'password'=> bcrypt('Mazza'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Flavia Vitale',
               'email'=>'flavia.vitale@unime.it',
               'password'=> bcrypt('Vitale'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Bruno Parisi',
               'email'=>'bruno.parisi@unime.it',
               'password'=> bcrypt('Parisi'),
               'utype'=>'USR'
            ],
	          [
               'name'=>'Umberto Martino',
               'email'=>'umberto.martino@unime.it',
               'password'=> bcrypt('Martino'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Michele Violi',
               'email'=>'michele.violi@unime.it',
               'password'=> bcrypt('Violi'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Clemente Silvestri',
               'email'=>'clemente.silvestri@unime.it',
               'password'=> bcrypt('Silvestri'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Emanuele Pellegrino',
               'email'=>'emanuele.pellegrino@unime.it',
               'password'=> bcrypt('Pellegrino'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Santo Barone',
               'email'=>'santo.barone@unime.it',
               'password'=> bcrypt('Barone'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Francesco Piazza',
               'email'=>'francesco.piazza@unime.it',
               'password'=> bcrypt('Piazza'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Ferdinando Moro',
               'email'=>'ferdinando.moro@unime.it',
               'password'=> bcrypt('Moro'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Armando Caputo',
               'email'=>'armando.caputo@unime.it',
               'password'=> bcrypt('Caputo'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Daniele Giuliani',
               'email'=>'daniele.giuliani@unime.it',
               'password'=> bcrypt('Giuliani'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Elisabetta Sala',
               'email'=>'elisabetta.sala@unime.it',
               'password'=> bcrypt('Sala'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Costanzo Battaglia',
               'email'=>'costanzo.battaglia@unime.it',
               'password'=> bcrypt('Battaglia'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Augusto Poli',
               'email'=>'augusto.poli@unime.it',
               'password'=> bcrypt('Poli'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Edoardo Alberti',
               'email'=>'edoardo.alberti@unime.it',
               'password'=> bcrypt('Alberti'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Benito Romeo',
               'email'=>'benito.romeo@unime.it',
               'password'=> bcrypt('Romeo'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Antonio Rossi',
               'email'=>'antonio.rossi@unime.it',
               'password'=> bcrypt('Rossi'),
               'utype'=>'USR'
            ],

            [
               'name'=>'Giovanni Lorenzini',
               'email'=>'giovanni.lorenzini@unime.it',
               'password'=> bcrypt('Lorenzini'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Armando Catanese',
               'email'=>'armando.catanese@unime.it',
               'password'=> bcrypt('Catanese'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Raffaele Benedetti',
               'email'=>'raffaele.benedetti@unime.it',
               'password'=> bcrypt('Benedetti'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Diego Spinelli',
               'email'=>'diego.spinelli@unime.it',
               'password'=> bcrypt('Spinelli'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Cosimo Bassi',
               'email'=>'cosimo.bassi@unime.it',
               'password'=> bcrypt('Bassi'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Enzo Valente',
               'email'=>'enzo.valente@unime.it',
               'password'=> bcrypt('Valente'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Fiorella Coppola',
               'email'=>'fiorella.coppola@unime.it',
               'password'=> bcrypt('Coppola'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Attilio Molinari',
               'email'=>'attilio.molinari@unime.it',
               'password'=> bcrypt('Molinari'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Domenico Moretti',
               'email'=>'domenico.moretti@unime.it',
               'password'=> bcrypt('Moretti'),
               'utype'=>'USR'
            ],
            [
               'name'=>'Davide Rizzo',
               'email'=>'davide.rizzo@unime.it',
               'password'=> bcrypt('Rizzo'),
               'utype'=>'USR'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
              }
    }
}
