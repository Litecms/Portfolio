<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class PortfolioCategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.portfolio.category.model.table'))->insert([
            ['id' => '1', 'name' => 'Environmental', 'slug' => 'environmental', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'deleted_at' => null, 'created_at' => '2018-09-21 06:03:56', 'updated_at' => '2018-09-21 06:03:56'],
            ['id' => '2', 'name' => 'Branding', 'slug' => 'branding', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'deleted_at' => null, 'created_at' => '2018-09-21 06:04:19', 'updated_at' => '2018-09-21 06:04:19'],
            ['id' => '3', 'name' => 'Digital', 'slug' => 'digital', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'deleted_at' => null, 'created_at' => '2018-09-21 06:05:16', 'updated_at' => '2018-09-21 06:05:16'],
        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'portfolio.category.view',
                'name' => 'View Category',
            ],
            [
                'slug' => 'portfolio.category.create',
                'name' => 'Create Category',
            ],
            [
                'slug' => 'portfolio.category.edit',
                'name' => 'Update Category',
            ],
            [
                'slug' => 'portfolio.category.delete',
                'name' => 'Delete Category',
            ],

        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/portfolio/category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/portfolio/category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'pacakge'   => 'Portfolio',
        'module'    => 'Category',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'portfolio.category.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
