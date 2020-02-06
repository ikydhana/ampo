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
                'color' => NULL,
                'icon' => 'fa fa-map-marker',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2020-02-06 06:33:09',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'pembimbing_menu',
                'type' => 'Module',
                'path' => 'pembimbing',
                'color' => 'normal',
                'icon' => 'fa fa-bookmark',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => NULL,
                'created_at' => '2020-02-06 06:38:46',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}