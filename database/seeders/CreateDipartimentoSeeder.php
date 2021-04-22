<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_dipartimento;


class CreateDipartimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dipartimento = [
            [
                'id' => 1,
                'nome'  => 'Civilità antiche e moderne',
                'CAP'  => 98168,
                'numero_civico'  => 0,
                'via'  =>'A. Giuffre',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 1
            ],
            [
                'id' => 2,
                'nome'  => 'Economia',
                'CAP'  => 98122,
                'numero_civico'  => 98,
                'via'  =>'Cesare Battisti',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 2
            ],
            [
                'id' => 3,
                'nome'  =>'Giurisprudenza',
                'CAP'  => 98122,
                'numero_civico'  => 1,
                'via'  =>'Piazza Pugliatti',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 3
            ],
            [
                'id' => 4,
                'nome'  =>'Ingegneria',
                'CAP'  => 98166,
                'numero_civico'  => 0,
                'via'  =>'Contrada Di Dio (S. Agata)',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 4
            ],
            [
                'id' => 5,
                'nome'  =>'Medicina Clinica e Sperimentale',
                'CAP'  => 98125,
                'numero_civico'  => 1,
                'via'  =>'Consolare Valeria',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 5
            ],
            [
                'id' => 6,
                'nome'  =>'Patologia umana dell\'adulto e dell\'età',
                'CAP'  => 98125,
                'numero_civico'  => 1,
                'via'  =>'Consolare Valeria',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 6
            ],
            [
                'id' => 7,
                'nome'  =>'Scienze Biomediche odontoiatriche',
                'CAP'  => 98168,
                'numero_civico'  => 1,
                'via'  =>'Consolare Valeria',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 7
            ],
            [
                'id' => 8,
                'nome'  =>'Scienze chimiche biologiche farmaceutiche ed ambientali',
                'CAP'  => 98166,
                'numero_civico'  => 0,
                'via'  =>'Stagno d\'Alcontres Messina',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 8
            ],
            [
                'id' => 9,
                'nome'  =>'Scienze cognitive psicologiche',
                'CAP'  => 98121,
                'numero_civico'  => 8,
                'via'  =>'Concezione',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 9
            ],
            [
                'id' => 10,
                'nome'  =>'MIFT',
                'CAP'  => 98166,
                'numero_civico'  => 0,
                'via'  =>'Stagno d\'Alcontres',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 10
            ],
            [
                'id' => 11,
                'nome'  =>'Scienze politiche e giuridiche',
                'CAP'  => 98122,
                'numero_civico'  => 0,
                'via'  =>'Piazza 20 settembre',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 11
            ],
            [
                'id' => 12,
                'nome'  =>'Scienze Veterinarie',
                'CAP'  => 98168,
                'numero_civico'  => 0,
                'via'  =>'Polo Universitario SS Annunziata',
                'citta'  =>'Messina',
                'provincia'  =>'ME',
                'id_direttore'  => 12
            ]
        ];

        foreach ($dipartimento as $key => $value) {
            M_dipartimento::create($value);
        }
    }
}
