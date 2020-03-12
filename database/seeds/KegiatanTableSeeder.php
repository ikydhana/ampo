<?php

use Illuminate\Database\Seeder;

class KegiatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kegiatan')->delete();
        
        \DB::table('kegiatan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tgl_kegiatan' => '2020-03-11',
                'uraian' => 'asdawd',
                'id_cms_users' => 1,
                'foto_keg' => 'uploads/1/2020-03/unnamed.png',
                'created_at' => '2020-03-11 02:20:20',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}