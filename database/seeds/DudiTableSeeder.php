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
                'alamat' => 'Jl.Pangeran HM Noor No.17, Kemuning, Kec. Banjarbaru Selatan, Kota Banjar Baru, Kalimantan Selatan 70714',
                'email' => NULL,
                'notlp' => '051147721',
                'created_at' => '2020-02-10 01:54:07',
                'updated_at' => '2020-03-10 06:36:32',
                'id_jurusan' => NULL,
            ),
        ));
        
        
    }
}