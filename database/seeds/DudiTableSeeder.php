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
                'id_jurusan' => '1',
            ),
            1 => 
            array (
                'id' => 3,
                'nama_dudi' => 'PT.Indomarko',
                'alamat' => 'askdyasdkas',
                'email' => NULL,
                'notlp' => '1425364253',
                'created_at' => '2020-03-12 01:36:57',
                'updated_at' => NULL,
                'id_jurusan' => '1',
            ),
            2 => 
            array (
                'id' => 4,
                'nama_dudi' => 'PT.PLN',
                'alamat' => 'asduiasjhd',
                'email' => NULL,
                'notlp' => '192847',
                'created_at' => '2020-03-12 01:40:50',
                'updated_at' => NULL,
                'id_jurusan' => '2',
            ),
        ));
        
        
    }
}