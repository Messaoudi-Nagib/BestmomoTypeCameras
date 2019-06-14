<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('image_user')->insert([
            0 => [
                'image_id' => 1,
                'user_id' => 3,
                'rating' => 1,
            ],
            1 => [
                'image_id' => 4,
                'user_id' => 3,
                'rating' => 2,
            ],
            2 => [
                'image_id' => 3,
                'user_id' => 3,
                'rating' => 2,
            ],

        ]);
    }
}
