<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_personale_docente;


class CreatePersonaleDocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pdocente = [
                    
                        [
                            'nome'  =>'Alessandro',
                            'cognome'  =>'Arangio',
                            'email' => 'alessandro.arangio@unime.it',
                            'id_locale' => 983
                        ],
                        [
                            'nome'  =>'Antonino',
                            'cognome'  =>'Baglio',
                            'email' => 'antonino.baglio@unime.it',
                            'id_locale' => 985
                        ],
                        [
                            'nome'  => 'Giuseppe', 
                            'cognome'  => 'Caridi', 
                            'email' => 'giuseppe.caridi@unime.it', 
                            'id_locale' => 1067
                        ],
                        [
                            'nome'  => 'Gustavo', 
                            'cognome'  => 'Barresi', 
                            'email' => 'gustavo.barresi@unime.it', 
                            'id_locale' => 987
                        ],
                        [
                            'nome'  => 'Antonino', 
                            'cognome'  => 'Costa', 
                            'email' => 'antonino.costa@unime.it', 
                            'id_locale' => 989
                        ],
                        [
                            'nome'  => 'Grazia', 
                            'cognome'  => 'Calabrò', 
                            'email' => 'grazia.calabro@unime.it', 
                            'id_locale' => 1070
                        ],
                        [
                            'nome'  => 'Elena', 
                            'cognome'  => 'La Rosa',
                            'email' => 'elena.larosa@unime.it', 
                            'id_locale' => 992
                        ],
                        [
                            'nome'  => 'Carmela', 
                            'cognome'  => 'Panella', 
                            'email' => 'carmela.panella@unime.it', 
                            'id_locale' => 993 
                        ],
                        [
                            'nome'  => 'Mario', 
                            'cognome'  => 'Trimarchi', 
                            'email' => 'mario.trimarchi@unime.it', 
                            'id_locale' => 1071
                        ],
                        [
                            'nome'  => 'Dario', 
                            'cognome'  => 'Bruneo', 
                            'email' => 'dario.bruneo@unime.it', 
                            'id_locale' => 997
                        ],
                        [
                            'nome'  => 'Marco Lucio',
                            'cognome'  => 'Scarpa', 
                            'email' => 'marcolucio.scarpa@unime.it', 
                            'id_locale' => 1077
                        ],
                        [
                            'nome'  => 'Gioele', 
                            'cognome'  => 'Bergamaschi', 
                            'email' => 'gioele.bergamaschi@unime.it', 
                            'id_locale' => 1002
                        ],
                        [
                            'nome'  => 'Alessandro', 
                            'cognome'  => 'Napolitano', 
                            'email' => 'alessandro.napolitano@unime.it', 
                            'id_locale' => 1003
                        ],
                        [
                            'nome'  => 'Elisa', 
                            'cognome'  => 'Milani', 
                            'email' => 'elisa.milani@unime.it', 
                            'id_locale' => 1098
                        ],
                        [
                            'nome'  => 'Isabella', 
                            'cognome'  => 'Manione', 
                            'email' => 'isabella.manione@unime.it', 
                            'id_locale' => 1009
                        ],
                        [
                            'nome'  => 'Vincenzo', 
                            'cognome'  => 'Adamo', 
                            'email' => 'vincenzo.adamo@unime.it', 
                            'id_locale' => 1010
                        ],
                        [
                            'nome'  => 'Irene', 
                            'cognome'  => 'Castagna', 
                            'email' => 'irene.castagna@unime.it', 
                            'id_locale' => 1101
                        ],
                        [
                            'nome'  => 'Concetta', 
                            'cognome'  => 'Beninadi', 
                            'email' => 'concetta.beninadi@unime.it',  
                            'id_locale' => 1014 
                        ],
                        [
                            'nome'  => 'Salvatore', 
                            'cognome'  => 'Campo', 
                            'email' => 'salvatore.campo@unime.it', 
                            'id_locale' => 1015
                        ],
                        [
                            'nome'  => 'Alessandra', 
                            'cognome'  => 'Bitto', 
                            'email' => 'alessandra.bitto@unime.it', 
                            'id_locale' => 1106
                        ],
                        [
                            'nome'  => 'Salvatore', 
                            'cognome'  => 'Giacobbe', 
                            'email' => 'salvatore.giacobbe@unime.it', 
                            'id_locale' => 1018
                        ],
                        [
                            'nome'  => 'Lorenzo', 
                            'cognome'  => 'Torrisi', 
                            'email' => 'lorenzo.torrisi@unime.it',  
                            'id_locale' => 1019
                        ],
                        [
                            'nome'  => 'Ester', 
                            'cognome'  => 'Tellone', 
                            'email' => 'ester.tellone@unime.it', 
                            'id_locale' => 1109
                        ],
                        [
                            'nome'  => 'Elvira', 
                            'cognome'  => 'Assenza', 
                            'email' => 'elvira.assenza@unime.it', 
                            'id_locale' => 1023
                        ],
                        [
                            'nome'  => 'Rosalia', 
                            'cognome'  => 'Cavalieri', 
                            'email' => 'rosalia.cavalieri@unime.it', 
                            'id_locale' => 1025
                        ],
                        [
                            'nome'  => 'Amelia', 
                            'cognome'  => 'Gangemi', 
                            'email' => 'amelia.gangemi@unime.it', 
                            'id_locale' => 1117
                        ],
                        [
                            'nome'  => 'Gina', 
                            'cognome'  => 'Puccio', 
                            'email' => 'gina.puccio@unime.it', 
                            'id_locale' => 1028
                        ],
                        [
                            'nome'  => 'Massimo', 
                            'cognome'  => 'Villari', 
                            'email' => 'massimo.villari@unime.it', 
                            'id_locale' => 1029
                        ],
                        [
                            'nome'  => 'Andrea', 
                            'cognome'  => 'Nucita', 
                            'email' => 'andrea.nucita@unime.it', 
                            'id_locale' => 1123,
                        ],
                        [
                            'nome'  => 'Filadelfio', 
                            'cognome'  => 'Mancuso', 
                            'email' => 'filadelfio.mancuso@unime.it',
                            'id_locale' => 1033
                        ],
                        [
                            'nome'  => 'Maurizio', 
                            'cognome'  => 'Lisciarda', 
                            'email' => 'maurizio.lisciarda@unime.it',
                            'id_locale' => 1034
                        ],
                        [
                            'nome'  => 'Stefano', 
                            'cognome'  => 'Morabito', 
                            'email' => 'stefano.morabito@unime.it', 
                            'id_locale' => 1127
                        ],
                        [
                            'nome'  => 'Elisabetta', 
                            'cognome'  => 'Giudice', 
                            'email' => 'elisabetta.giudice@unime.it', 
                            'id_locale' => 1039
                        ],
                        [
                            'nome'  => 'Ugo', 
                            'cognome'  => 'Muglia', 
                            'email' => 'ugo.muglia@unime.it', 
                            'id_locale' => 1040
                        ],
                        [
                            'nome'  => 'Giuseppe', 
                            'cognome'  => 'Cucinotta', 
                            'email' => 'giuseppe.cucinotta@unime.it', 
                            'id_locale' => 1131
                        ],
                        [
                            'nome'  => 'Antonio', 
                            'cognome'  => 'Puliafito', 
                            'email' => 'antonio.puliafito@unime.it', 
                            'id_locale' => 1029
                        ],
                        [
                            'nome'  => 'Rita', 
                            'cognome'  => 'Ardizzone', 
                            'email' => 'rita.ardizzone@unime.it', 
                            'id_locale' => 1069
                        ],
                        [
                            'nome'  => 'Pierangelo', 
                            'cognome'  => 'Grimaudo', 
                            'email' => 'pierangelo.grimaudo@unime.it', 
                            'id_locale' => 1127 
                        ],
                        [
                            'nome'  => 'Daniele', 
                            'cognome'  => 'Tranchida', 
                            'email' => 'daniele.tranchida@unime.it', 
                            'id_locale' => 1033
                        ],
                        [
                            'nome'  => 'Ferdinando', 
                            'cognome'  => 'Ofria', 
                            'email' => 'ferdinando.ofria@unime.it', 
                            'id_locale' => 1035
                        ],
                        [
                            'nome'  => 'Michele', 
                            'cognome'  => 'Gaeta', 
                            'email' => 'gaeta.michele@unime.it', 
                            'id_locale' => 1105
                        ],
                        [
                            'nome'  => 'Domenica', 
                            'cognome'  => 'Altavilla', 
                            'email' => 'domenica.altavilla@unime.it', 
                            'id_locale' => 1108
                        ],
                        [
                            'nome'  => 'Angela', 
                            'cognome'  => 'Di Pietro ', 
                            'email' => '@angela.dipietro@unime.it', 
                            'id_locale' => 1014
                        ],
                        [
                            'nome'  => 'Giuseppe', 
                            'cognome'  => 'Ricciardi', 
                            'email' => 'giuseppe.ricciardi@unime.it', 
                            'id_locale' => 999
                        ],
                        [
                            'nome'  => 'Roberta', 
                            'cognome'  => 'Santoro', 
                            'email' => 'roberta.santoro@unime.it', 
                            'id_locale' => 1080
                        ],
                        [
                            'nome'  => 'Giuseppe', 
                            'cognome'  => 'Muscolino', 						
                            'email' => 'giuseppe.muscolino@unime.it', 
                            'id_locale' => 1084
                        ],
                        [
                            'nome'  => 'Giovanna', 
                            'cognome'  => 'Vermiglio', 						
                            'email' => 'giovanna.merviglio@unime.it', 
                            'id_locale' => 1102
                        ],
                        [
                            'nome'  => 'Caterina', 
                            'cognome'  => 'Malta', 						
                            'email' => 'caterina.malta@unime.it', 
                            'id_locale' => 1068
                        ]
        
        ];
               
        foreach ($pdocente as $key => $value) {
            M_personale_docente::create($value);
              }
    }
}




