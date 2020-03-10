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
            13 => 
            array (
                'id' => 14,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/dudi/add-save',
                'description' => 'Tambah data baru PT. Telkom pada Dunia Usaha / Industri',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 01:54:07',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/jurusan/add-save',
                'description' => 'Tambah data baru Desain Komunikasi Visual pada Jurusan',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 01:57:32',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/jurusan/add-save',
                'description' => 'Tambah data baru Perkantoran pada Jurusan',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 01:58:01',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/siswa/add-save',
                'description' => 'Tambah data baru Spiderman Indo pada Siswa',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 03:51:05',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'url' => 'http://localhost:8000/admin/siswa/add-save',
                'description' => 'Tambah data baru Renaldo pada Siswa',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 03:54:40',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/users/add-save',
                'description' => 'Tambah data baru Kaprog OTKP pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 05:55:16',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/logout',
                'description' => 'admin@crudbooster.com keluar',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 05:55:26',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'otkp.by@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 7,
                'created_at' => '2020-02-10 05:55:28',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/logout',
                'description' => 'otkp.by@gmail.com keluar',
                'details' => '',
                'id_cms_users' => 7,
                'created_at' => '2020-02-10 05:55:32',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 05:55:36',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/1',
                'description' => 'Memperbaharui data Pembimbing Magang pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 05:55:50',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/3',
                'description' => 'Memperbaharui data Dunia Usaha / Industri pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 05:56:01',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/5',
                'description' => 'Memperbaharui data Siswa pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 05:56:17',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/logout',
                'description' => 'admin@crudbooster.com keluar',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 05:56:22',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'otkp.by@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 7,
                'created_at' => '2020-02-10 05:56:31',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/siswa/add-save',
                'description' => 'Tambah data baru Budi pada Siswa',
                'details' => '',
                'id_cms_users' => 7,
                'created_at' => '2020-02-10 06:00:07',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/logout',
                'description' => 'otkp.by@gmail.com keluar',
                'details' => '',
                'id_cms_users' => 7,
                'created_at' => '2020-02-10 06:00:29',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 06:00:33',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/users/add-save',
                'description' => 'Tambah data baru Kaprog DKV pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 06:01:24',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 34,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'dkv.jaya@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 9,
                'created_at' => '2020-02-10 06:01:58',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 35,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/users/delete/9',
                'description' => 'Menghapus data Kaprog DKV pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 06:09:18',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/logout',
                'description' => ' keluar',
                'details' => '',
                'id_cms_users' => 9,
                'created_at' => '2020-02-10 06:09:24',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/users/add-save',
                'description' => 'Tambah data baru KAPROG DKV pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 06:09:58',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 38,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/users/delete/7',
                'description' => 'Menghapus data Kaprog OTKP pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 06:10:38',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 39,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/users/add-save',
                'description' => 'Tambah data baru KAPROG OTKP pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-10 06:11:12',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'otkp.by@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 11,
                'created_at' => '2020-02-10 06:11:37',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/siswa/add-save',
                'description' => 'Tambah data baru BUDI HARTONO pada Siswa',
                'details' => '',
                'id_cms_users' => 11,
                'created_at' => '2020-02-10 06:12:58',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-11 00:34:16',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 43,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/2',
                'description' => 'Memperbaharui data Menu Pembimbing pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>pembimbing_menu</td><td>Menu Pembimbing</td></tr><tr><td>icon</td><td>fa fa-bookmark</td><td>fa fa-toggle-down</td></tr><tr><td>sorting</td><td></td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-02-11 00:35:09',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 44,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/add-save',
                'description' => 'Tambah data baru Menu Siswa pada Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-02-11 00:36:44',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 45,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/7',
                'description' => 'Memperbaharui data Kegiatan pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>Input Kegiatan</td><td>Kegiatan</td></tr><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-02-11 01:06:21',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 46,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => 'admin@crudbooster.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-03-10 06:34:53',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 47,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/dudi/edit-save/1',
                'description' => 'Memperbaharui data PT. Telkom pada Dunia Usaha / Industri',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>alamat</td><td></td><td>Jl.Pangeran HM Noor No.17, Kemuning, Kec. Banjarbaru Selatan, Kota Banjar Baru, Kalimantan Selatan 70714</td></tr><tr><td>email</td><td></td><td></td></tr><tr><td>notlp</td><td></td><td>051147721</td></tr><tr><td>id_jurusan</td><td></td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-03-10 06:36:32',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 48,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/4',
                'description' => 'Memperbaharui data Jurusan pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-glass</td><td>fa fa-book</td></tr><tr><td>parent_id</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-03-10 06:45:55',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 49,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/5',
                'description' => 'Memperbaharui data Siswa pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>icon</td><td>fa fa-glass</td><td>fa fa-user</td></tr><tr><td>parent_id</td><td>2</td><td></td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-03-10 06:46:07',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 50,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/2',
                'description' => 'Memperbaharui data Menu Operator pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>Menu Pembimbing</td><td>Menu Operator</td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-03-10 06:46:32',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 51,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/7',
                'description' => 'Memperbaharui data Kegiatan pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-03-10 06:47:29',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}