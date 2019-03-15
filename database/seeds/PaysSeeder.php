<?php

use Illuminate\Database\Seeder;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pays::create([
            'libelle' => 'France']);

        \App\Models\Pays::create([
            'libelle' => 'Belgique'
        ]);
    }
}
