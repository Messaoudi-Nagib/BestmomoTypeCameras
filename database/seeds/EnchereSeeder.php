<?php

use App\Enchere;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnchereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('encheres')->insert([
            'montant' => 13,
            'email_offreur' => 'test@gmail.com',
            'image_id' => 1
        ]);
        DB::table('encheres')->insert([
            'montant' => 13,
            'email_offreur' => 'titi@gmail.com',
            'image_id' => 2
        ]);
        DB::table('encheres')->insert([
            'montant' => 13,
            'email_offreur' => 'toto@gmail.com',
            'image_id' => 3
        ]);
        DB::table('encheres')->insert([
            'montant' => 16,
            'email_offreur' => 'dupont@gmail.com',
            'image_id' => 4
        ]);
        DB::table('encheres')->insert([
            'montant' => 17,
            'email_offreur' => 'nagib@gmail.com',
            'image_id' => 2
        ]);

    }
}
