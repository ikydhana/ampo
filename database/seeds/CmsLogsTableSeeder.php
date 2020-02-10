<?php

use Illuminate\Database\Seeder;

class CmsLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_logs')->delete();
        
        \DB::table('cms_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-01-30 06:30:47',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-05 01:57:20',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'admin@crudbooster.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-05 08:18:44',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'admin@crudbooster.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-06 06:32:07',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/add-save',
                'description' => 'Tambah data baru pembimbing_menu pada Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-06 06:38:46',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/pembimbing/add-save',
                'description' => 'Tambah data baru  pada Pembimbing Magang',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-06 06:48:51',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/users/add-save',
                'description' => 'Tambah data baru Ronaldo pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-06 06:56:14',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/users/add-save',
                'description' => 'Tambah data baru Zidane Z pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-06 06:57:14',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/users/add-save',
                'description' => 'Tambah data baru Real Madrid pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-06 06:58:31',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'admin@crudbooster.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-07 21:23:38',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/3',
                'description' => 'Memperbaharui data Dunia Usaha / Industri pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>DUDI</td><td>Dunia Usaha / Industri</td></tr><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-star</td><td>fa fa-map-marker</td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-02-07 22:32:10',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/dudi/add-save',
                'description' => 'Tambah data baru PT. TELKOM pada Dunia Usaha / Industri',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-07 22:32:42',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/dudi/add-save',
                'description' => 'Tambah data baru PT. PAMA pada Dunia Usaha / Industri',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-07 22:33:01',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}