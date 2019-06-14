<?php

use Illuminate\Database\Seeder;

class AlbumImageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('album_image')->delete();
        
        \DB::table('album_image')->insert(array (
            0 => 
            array (
                'id' => 1,
                'album_id' => 2,
                'image_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'album_id' => 2,
                'image_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'album_id' => 1,
                'image_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'album_id' => 3,
                'image_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            )
        ));
        
        
    }
}
