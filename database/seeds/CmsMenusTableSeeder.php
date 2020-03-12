<?php

use Illuminate\Database\Seeder;

class CmsMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus')->delete();
        
        \DB::table('cms_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pembimbing Magang',
                'type' => 'Route',
                'path' => 'AdminPembimbingControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-map-marker',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2020-02-06 06:33:09',
                'updated_at' => '2020-02-10 05:55:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Menu Operator',
                'type' => 'Module',
                'path' => 'pembimbing',
                'color' => 'normal',
                'icon' => 'fa fa-toggle-down',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2020-02-06 06:38:46',
                'updated_at' => '2020-03-10 06:46:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Dunia Usaha / Industri',
                'type' => 'Route',
                'path' => 'AdminDudiControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-map-marker',
                'parent_id' => 2,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3,
                'created_at' => '2020-02-07 21:34:04',
                'updated_at' => '2020-02-10 05:56:01',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Jurusan',
                'type' => 'Route',
                'path' => 'AdminJurusanControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-book',
                'parent_id' => 2,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2020-02-10 01:55:28',
                'updated_at' => '2020-03-10 06:45:55',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Siswa',
                'type' => 'Route',
                'path' => 'AdminSiswaControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-user',
                'parent_id' => 2,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2020-02-10 02:38:31',
                'updated_at' => '2020-03-10 06:46:06',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Menu Siswa',
                'type' => 'URL',
                'path' => '#',
                'color' => 'normal',
                'icon' => 'fa fa-toggle-down',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => NULL,
                'created_at' => '2020-02-11 00:36:44',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Kegiatan',
                'type' => 'Route',
                'path' => 'AdminKegiatanControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-check',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3,
                'created_at' => '2020-02-11 00:37:17',
                'updated_at' => '2020-03-11 02:05:08',
            ),
        ));
        
        
    }
}