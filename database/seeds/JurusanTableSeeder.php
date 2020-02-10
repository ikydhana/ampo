<?php

use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jurusan')->delete();
        
        \DB::table('jurusan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kode_jurusan' => 'DKV',
                'nama_jurusan' => 'Desain Komunikasi Visual',
                'created_at' => '2020-02-10 01:57:32',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'kode_jurusan' => 'OTKP',
                'nama_jurusan' => 'Perkantoran',
                'created_at' => '2020-02-10 01:58:01',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}