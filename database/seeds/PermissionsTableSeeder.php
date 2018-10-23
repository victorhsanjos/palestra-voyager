<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-10-22 23:27:15',
                'updated_at' => '2018-10-22 23:27:15',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-10-22 23:27:15',
                'updated_at' => '2018-10-22 23:27:15',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-10-22 23:27:15',
                'updated_at' => '2018-10-22 23:27:15',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-10-22 23:27:16',
                'updated_at' => '2018-10-22 23:27:16',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-10-22 23:27:18',
                'updated_at' => '2018-10-22 23:27:18',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_developers',
                'table_name' => 'developers',
                'created_at' => '2018-10-23 00:02:53',
                'updated_at' => '2018-10-23 00:02:53',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_developers',
                'table_name' => 'developers',
                'created_at' => '2018-10-23 00:02:53',
                'updated_at' => '2018-10-23 00:02:53',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_developers',
                'table_name' => 'developers',
                'created_at' => '2018-10-23 00:02:53',
                'updated_at' => '2018-10-23 00:02:53',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_developers',
                'table_name' => 'developers',
                'created_at' => '2018-10-23 00:02:53',
                'updated_at' => '2018-10-23 00:02:53',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_developers',
                'table_name' => 'developers',
                'created_at' => '2018-10-23 00:02:53',
                'updated_at' => '2018-10-23 00:02:53',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_genres',
                'table_name' => 'genres',
                'created_at' => '2018-10-23 00:03:19',
                'updated_at' => '2018-10-23 00:03:19',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_genres',
                'table_name' => 'genres',
                'created_at' => '2018-10-23 00:03:19',
                'updated_at' => '2018-10-23 00:03:19',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_genres',
                'table_name' => 'genres',
                'created_at' => '2018-10-23 00:03:19',
                'updated_at' => '2018-10-23 00:03:19',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_genres',
                'table_name' => 'genres',
                'created_at' => '2018-10-23 00:03:19',
                'updated_at' => '2018-10-23 00:03:19',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_genres',
                'table_name' => 'genres',
                'created_at' => '2018-10-23 00:03:19',
                'updated_at' => '2018-10-23 00:03:19',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_idioms',
                'table_name' => 'idioms',
                'created_at' => '2018-10-23 00:03:40',
                'updated_at' => '2018-10-23 00:03:40',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_idioms',
                'table_name' => 'idioms',
                'created_at' => '2018-10-23 00:03:40',
                'updated_at' => '2018-10-23 00:03:40',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_idioms',
                'table_name' => 'idioms',
                'created_at' => '2018-10-23 00:03:40',
                'updated_at' => '2018-10-23 00:03:40',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_idioms',
                'table_name' => 'idioms',
                'created_at' => '2018-10-23 00:03:40',
                'updated_at' => '2018-10-23 00:03:40',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_idioms',
                'table_name' => 'idioms',
                'created_at' => '2018-10-23 00:03:40',
                'updated_at' => '2018-10-23 00:03:40',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_games',
                'table_name' => 'games',
                'created_at' => '2018-10-23 00:04:24',
                'updated_at' => '2018-10-23 00:04:24',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'read_games',
                'table_name' => 'games',
                'created_at' => '2018-10-23 00:04:24',
                'updated_at' => '2018-10-23 00:04:24',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'edit_games',
                'table_name' => 'games',
                'created_at' => '2018-10-23 00:04:24',
                'updated_at' => '2018-10-23 00:04:24',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'add_games',
                'table_name' => 'games',
                'created_at' => '2018-10-23 00:04:24',
                'updated_at' => '2018-10-23 00:04:24',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'delete_games',
                'table_name' => 'games',
                'created_at' => '2018-10-23 00:04:24',
                'updated_at' => '2018-10-23 00:04:24',
            ),
        ));
        
        
    }
}