<?php

use Illuminate\Database\Seeder;

class CommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Commerce::create([
            'prix' => '42',
            'description' =>'Camera datant de 2012'

        ]);


    }
}
