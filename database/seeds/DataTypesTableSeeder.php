<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-10-22 23:27:15',
                'updated_at' => '2018-10-22 23:27:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-10-22 23:27:15',
                'updated_at' => '2018-10-22 23:27:15',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-10-22 23:27:15',
                'updated_at' => '2018-10-22 23:27:15',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-10-22 23:27:17',
                'updated_at' => '2018-10-22 23:27:17',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'developers',
                'slug' => 'developers',
                'display_name_singular' => 'Developer',
                'display_name_plural' => 'Developers',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Developer',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-10-23 00:02:53',
                'updated_at' => '2018-10-23 00:02:53',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'genres',
                'slug' => 'genres',
                'display_name_singular' => 'Genre',
                'display_name_plural' => 'Genres',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\Genre',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-10-23 00:03:19',
                'updated_at' => '2018-10-23 00:03:19',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'idioms',
                'slug' => 'idioms',
                'display_name_singular' => 'Idiom',
                'display_name_plural' => 'Idioms',
                'icon' => 'voyager-chat',
                'model_name' => 'App\\Idiom',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-10-23 00:03:40',
                'updated_at' => '2018-10-23 00:03:40',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'games',
                'slug' => 'games',
                'display_name_singular' => 'Game',
                'display_name_plural' => 'Games',
                'icon' => 'voyager-controller',
                'model_name' => 'App\\Game',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-10-23 00:04:24',
                'updated_at' => '2018-10-23 02:08:27',
            ),
        ));
        
        
    }
}