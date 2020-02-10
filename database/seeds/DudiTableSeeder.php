<?php

use Illuminate\Database\Seeder;

class DudiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dudi')->delete();
        
        \DB::table('dudi')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_dudi' => 'PT. Telkom',
                'alamat' => NULL,
                'email' => NULL,
                'notlp' => NULL,
                'created_at' => '2020-02-10 01:54:07',
                'updated_at' => NULL,
                'id_jurusan' => NULL,
            ),
        ));
        
        
    }
}