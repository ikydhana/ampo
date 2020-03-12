<?php

use Illuminate\Database\Seeder;

class CmsModulsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_moduls')->delete();
        
        \DB::table('cms_moduls')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Notifications',
                'icon' => 'fa fa-cog',
                'path' => 'notifications',
                'table_name' => 'cms_notifications',
                'controller' => 'NotificationsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Privileges',
                'icon' => 'fa fa-cog',
                'path' => 'privileges',
                'table_name' => 'cms_privileges',
                'controller' => 'PrivilegesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Privileges Roles',
                'icon' => 'fa fa-cog',
                'path' => 'privileges_roles',
                'table_name' => 'cms_privileges_roles',
                'controller' => 'PrivilegesRolesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Users Management',
                'icon' => 'fa fa-users',
                'path' => 'users',
                'table_name' => 'cms_users',
                'controller' => 'AdminCmsUsersController',
                'is_protected' => 0,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Settings',
                'icon' => 'fa fa-cog',
                'path' => 'settings',
                'table_name' => 'cms_settings',
                'controller' => 'SettingsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Module Generator',
                'icon' => 'fa fa-database',
                'path' => 'module_generator',
                'table_name' => 'cms_moduls',
                'controller' => 'ModulsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Menu Management',
                'icon' => 'fa fa-bars',
                'path' => 'menu_management',
                'table_name' => 'cms_menus',
                'controller' => 'MenusController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Email Templates',
                'icon' => 'fa fa-envelope-o',
                'path' => 'email_templates',
                'table_name' => 'cms_email_templates',
                'controller' => 'EmailTemplatesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Statistic Builder',
                'icon' => 'fa fa-dashboard',
                'path' => 'statistic_builder',
                'table_name' => 'cms_statistics',
                'controller' => 'StatisticBuilderController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'API Generator',
                'icon' => 'fa fa-cloud-download',
                'path' => 'api_generator',
                'table_name' => '',
                'controller' => 'ApiCustomController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Log User Access',
                'icon' => 'fa fa-flag-o',
                'path' => 'logs',
                'table_name' => 'cms_logs',
                'controller' => 'LogsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-01-30 06:26:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Pembimbing Magang',
                'icon' => 'fa fa-map-marker',
                'path' => 'pembimbing',
                'table_name' => 'pembimbing',
                'controller' => 'AdminPembimbingController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-02-06 06:33:09',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Dunia Usaha / Industri',
                'icon' => 'fa fa-star',
                'path' => 'dudi',
                'table_name' => 'dudi',
                'controller' => 'AdminDudiController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-02-07 21:34:04',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Jurusan',
                'icon' => 'fa fa-glass',
                'path' => 'jurusan',
                'table_name' => 'jurusan',
                'controller' => 'AdminJurusanController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-02-10 01:55:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Siswa',
                'icon' => 'fa fa-glass',
                'path' => 'siswa',
                'table_name' => 'cms_users',
                'controller' => 'AdminSiswaController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-02-10 02:38:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Kegiatan',
                'icon' => 'fa fa-bars',
                'path' => 'kegiatan',
                'table_name' => 'kegiatan',
                'controller' => 'AdminKegiatanController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-02-11 00:37:17',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Pilih Tempat Magang',
                'icon' => 'fa fa-map-marker',
                'path' => 'ptm',
                'table_name' => 'ptm',
                'controller' => 'AdminPtmController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-03-12 02:00:56',
                'updated_at' => NULL,
                'deleted_at' => '2020-03-12 02:06:42',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Pilih Tempat Magang',
                'icon' => 'fa fa-map-marker',
                'path' => 'ptm',
                'table_name' => 'ptm',
                'controller' => 'AdminPtmController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-03-12 02:06:59',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}