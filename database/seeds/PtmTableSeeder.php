<?php

use Illuminate\Database\Seeder;

class PtmTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ptm')->delete();
        
        \DB::table('ptm')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_cms_users' => 4,
                'id_dudi' => 1,
                'id_jurusan' => 1,
                'created_at' => '2020-03-12 03:26:35',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_cms_users' => 4,
                'id_dudi' => 1,
                'id_jurusan' => 1,
                'created_at' => '2020-03-12 03:41:44',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}