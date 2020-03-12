<?php

use Illuminate\Database\Seeder;

class CmsMenusPrivilegesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus_privileges')->delete();
        
        \DB::table('cms_menus_privileges')->insert(array (
            0 => 
            array (
                'id' => 7,
                'id_cms_menus' => 1,
                'id_cms_privileges' => 5,
            ),
            1 => 
            array (
                'id' => 8,
                'id_cms_menus' => 1,
                'id_cms_privileges' => 1,
            ),
            2 => 
            array (
                'id' => 9,
                'id_cms_menus' => 3,
                'id_cms_privileges' => 5,
            ),
            3 => 
            array (
                'id' => 10,
                'id_cms_menus' => 3,
                'id_cms_privileges' => 1,
            ),
            4 => 
            array (
                'id' => 19,
                'id_cms_menus' => 4,
                'id_cms_privileges' => 1,
            ),
            5 => 
            array (
                'id' => 20,
                'id_cms_menus' => 5,
                'id_cms_privileges' => 5,
            ),
            6 => 
            array (
                'id' => 21,
                'id_cms_menus' => 5,
                'id_cms_privileges' => 1,
            ),
            7 => 
            array (
                'id' => 22,
                'id_cms_menus' => 2,
                'id_cms_privileges' => 3,
            ),
            8 => 
            array (
                'id' => 23,
                'id_cms_menus' => 2,
                'id_cms_privileges' => 1,
            ),
            9 => 
            array (
                'id' => 29,
                'id_cms_menus' => 7,
                'id_cms_privileges' => 5,
            ),
            10 => 
            array (
                'id' => 30,
                'id_cms_menus' => 7,
                'id_cms_privileges' => 3,
            ),
            11 => 
            array (
                'id' => 31,
                'id_cms_menus' => 7,
                'id_cms_privileges' => 2,
            ),
            12 => 
            array (
                'id' => 32,
                'id_cms_menus' => 7,
                'id_cms_privileges' => 1,
            ),
            13 => 
            array (
                'id' => 35,
                'id_cms_menus' => 8,
                'id_cms_privileges' => 5,
            ),
            14 => 
            array (
                'id' => 36,
                'id_cms_menus' => 8,
                'id_cms_privileges' => 1,
            ),
            15 => 
            array (
                'id' => 39,
                'id_cms_menus' => NULL,
                'id_cms_privileges' => 5,
            ),
            16 => 
            array (
                'id' => 40,
                'id_cms_menus' => NULL,
                'id_cms_privileges' => 1,
            ),
            17 => 
            array (
                'id' => 41,
                'id_cms_menus' => 10,
                'id_cms_privileges' => 5,
            ),
            18 => 
            array (
                'id' => 42,
                'id_cms_menus' => 10,
                'id_cms_privileges' => 1,
            ),
            19 => 
            array (
                'id' => 43,
                'id_cms_menus' => 11,
                'id_cms_privileges' => 1,
            ),
            20 => 
            array (
                'id' => 45,
                'id_cms_menus' => 12,
                'id_cms_privileges' => 5,
            ),
            21 => 
            array (
                'id' => 46,
                'id_cms_menus' => 12,
                'id_cms_privileges' => 1,
            ),
        ));
        
        
    }
}