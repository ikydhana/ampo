<?php

use Illuminate\Database\Seeder;

class CmsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_users')->delete();
        
        \DB::table('cms_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'photo' => NULL,
                'email' => 'admin@crudbooster.com',
                'password' => '$2y$10$g5l9y.BVxJxxlQilT0s4ve2WPlGB47aJzBKpYOwHKTj9Qefobo6X2',
                'id_cms_privileges' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'status' => 'Active',
                'id_jurusan' => '1',
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'alamat' => NULL,
                'notlp' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ronaldo',
                'photo' => 'uploads/1/2020-02/rz_academy.png',
                'email' => 'ronaldo@gmail.com',
                'password' => '$2y$10$DeBgg2CM2PsQO6TF1q424O7HjZ4QAr6FKJDM50IFugnqtr0OL/wF.',
                'id_cms_privileges' => 2,
                'created_at' => '2020-02-06 06:56:14',
                'updated_at' => NULL,
                'status' => NULL,
                'id_jurusan' => '2',
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'alamat' => NULL,
                'notlp' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Zidane Z',
                'photo' => 'uploads/1/2020-02/rz_academy.png',
                'email' => 'zidane@gmail.smk',
                'password' => '$2y$10$5eEaAhIcw.n4dm3flL5NYOnaf0Mss8wxves0.tKsQJQkd5aCKnFx2',
                'id_cms_privileges' => 4,
                'created_at' => '2020-02-06 06:57:14',
                'updated_at' => NULL,
                'status' => NULL,
                'id_jurusan' => '2',
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'alamat' => NULL,
                'notlp' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Real Madrid',
                'photo' => 'uploads/1/2020-02/rz_academy.png',
                'email' => 'madrid@gmail.smk',
                'password' => '$2y$10$YNeCIJuO1Mcau9vijg/WduiIsd1KDGZPaIhY46j5zbYicaQDWkgOu',
                'id_cms_privileges' => 3,
                'created_at' => '2020-02-06 06:58:31',
                'updated_at' => NULL,
                'status' => NULL,
                'id_jurusan' => '2',
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'alamat' => NULL,
                'notlp' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Spiderman Indo',
                'photo' => 'uploads/1/2020-02/rz_academy.png',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$4j3j.oYRUJpPV84yxPkF6.u.j.BaTDKKesO9IfzYZlxd8LJ0xqYje',
                'id_cms_privileges' => 2,
                'created_at' => '2020-02-10 03:51:05',
                'updated_at' => NULL,
                'status' => 'Active',
                'id_jurusan' => '1',
                'tempat_lahir' => 'Mtp',
                'tanggal_lahir' => '2020-02-04',
                'alamat' => 'asdas',
                'notlp' => '087814451942',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Renaldo',
                'photo' => NULL,
                'email' => 'renaldi@gmail.com',
                'password' => '$2y$10$O6Vi46ERgr3Y7NgvHZJQuuERKwcHtk5C2UV7rhkR/GbDAu/yB1oam',
                'id_cms_privileges' => 2,
                'created_at' => '2020-02-10 03:54:40',
                'updated_at' => NULL,
                'status' => 'Active',
                'id_jurusan' => '1',
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'alamat' => NULL,
                'notlp' => NULL,
            ),
        ));
        
        
    }
}