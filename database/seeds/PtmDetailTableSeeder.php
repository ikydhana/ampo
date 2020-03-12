<?php

use Illuminate\Database\Seeder;

class PtmDetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ptm_detail')->delete();
        
        \DB::table('ptm_detail')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_cms_users' => 6,
                'id_ptm' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_cms_users' => 5,
                'id_ptm' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}