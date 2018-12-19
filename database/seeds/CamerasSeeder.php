<?php

use Illuminate\Database\Seeder;

class CamerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Camera::create([
            'name' => 'Reflexe']);

        \App\Models\Camera::create([
            'name' => 'Argentique'
        ]);
    }
}
