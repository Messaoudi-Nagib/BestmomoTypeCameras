<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'camera_id' => 1,
                'user_id' => 1,
                'name' => '3sj1TeoL6HL09nPktQulHnhcwUXgvpwJmzRMf51v.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:23:59',
                'updated_at' => '2017-11-02 17:23:59',
                'prix_depart' => 10,
                'date_fin' => Carbon::tomorrow('Europe/London'),
            ),
            1 => 
            array (
                'category_id' => 1,
                'camera_id' => 2,
                'user_id' => 1,
                'name' => 'VV1xiNlGP4cL9NfIgihfqzaJA2bi78yeL5nUTQLV.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:24:06',
                'updated_at' => '2017-11-02 17:24:06',
                'prix_depart' => 10,
                'date_fin' => Carbon::tomorrow('Europe/London'),

            ),
            2 => 
            array (
                'category_id' => 1,
                'camera_id' => 2,
                'user_id' => 1,
                'name' => 'BfDDgBAHcvkE6mQGwfWKXfeIfCl83ILXIBo6Pe8q.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:24:13',
                'updated_at' => '2017-11-02 17:24:13',
                'prix_depart' => 10,
                'date_fin' => Carbon::tomorrow('Europe/London'),
            ),
            3 => 
            array (
                'category_id' => 1,
                'camera_id' => 1,
                'user_id' => 1,
                'name' => '3MSTnvfn75zX33rWrR3Ws6GlofNEnoZeyr2OgUKM.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:24:22',
                'updated_at' => '2017-11-02 17:24:22',
                'prix_depart' => 10,
                'date_fin' => Carbon::tomorrow('Europe/London'),
            ),
            4 => 
            array (
                'category_id' => 1,
                'camera_id' => 1,
                'user_id' => 1,
                'name' => '2UjOECak0kwKsJ2cccxuhWTtyEBhYNIM5wWDyZqH.jpeg',
                'description' => 'La mer',
                'created_at' => '2017-11-02 17:24:33',
                'updated_at' => '2017-11-02 17:24:33',
                'prix_depart' => 10,
                'date_fin' => Carbon::tomorrow('Europe/London'),
            )
        ));
        
        
    }
}
