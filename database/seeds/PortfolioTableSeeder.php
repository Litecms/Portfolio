<?php

use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('portfolios')->insert([

            [
                'user_id'       => '1',
                'title'         => 'BRAND DESIGN',
                'slug'          => 'brand-design',
                'details'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
                'category_id'   => '3',
                'image'         => '{"caption":"01","efolder":"portfolios\\/oZZpuYhasornRm\\/image","file":"01.jpg"}',
                'images'        => '[{"caption":"01","efolder":"portfolios\\/oZZpuYhasornRm\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/124128137\\/images\\/","time":"2016-07-19 12:44:46","file":"01.jpg"},{"caption":"02","efolder":"portfolios\\/oZZpuYhasornRm\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/124128137\\/images\\/","time":"2016-07-19 12:44:46","file":"02.jpg"},{"caption":"03","efolder":"portfolios\\/oZZpuYhasornRm\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/124128137\\/images\\/","time":"2016-07-19 12:44:47","file":"03.jpg"}]',
                'status'        => 'show',
                'published'     => 'Yes',
                'upload_folder' => '',
                'created_at'    => '2016-07-20 10:51:21',
                'updated_at'    => '2016-07-20 05:21:21',
                'deleted_at'    => null,
            ],
            [
                'user_id'       => '1',
                'title'         => 'BRAND DESIGN',
                'slug'          => 'brand-design-2',
                'details'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
                'category_id'   => '2',
                'image'         => '{"caption":"01","efolder":"portfolios\\/v44EtDhQs3bedz\\/image","file":"01.jpg"}',
                'images'        => '[{"caption":"01","efolder":"portfolios\\/v44EtDhQs3bedz\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/124906482\\/images\\/","time":"2016-07-19 12:50:22","file":"01.jpg"},{"caption":"02","efolder":"portfolios\\/v44EtDhQs3bedz\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/124906482\\/images\\/","time":"2016-07-19 12:50:22","file":"02.jpg"},{"caption":"03","efolder":"portfolios\\/v44EtDhQs3bedz\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/124906482\\/images\\/","time":"2016-07-19 12:50:23","file":"03.jpg"},{"caption":"04","efolder":"portfolios\\/v44EtDhQs3bedz\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/124906482\\/images\\/","time":"2016-07-19 12:50:23","file":"04.jpg"}]',
                'status'        => 'show',
                'published'     => 'Yes',
                'upload_folder' => '',
                'created_at'    => '2016-07-20 12:38:19',
                'updated_at'    => '2016-07-20 05:21:44',
                'deleted_at'    => null,
            ],
            [
                'user_id'       => '1',
                'title'         => 'BRAND DESIGN',
                'slug'          => 'brand-design-3',
                'details'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
                'category_id'   => '4',
                'image'         => '{"caption":"02","efolder":"portfolios\\/1oogSmh7svzGEK\\/image","file":"02.jpg"}',
                'images'        => '[{"caption":"01","efolder":"portfolios\\/1oogSmh7svzGEK\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/125057343\\/images\\/","time":"2016-07-19 12:51:30","file":"01.jpg"},{"caption":"02","efolder":"portfolios\\/1oogSmh7svzGEK\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/125057343\\/images\\/","time":"2016-07-19 12:51:30","file":"02.jpg"},{"caption":"03","efolder":"portfolios\\/1oogSmh7svzGEK\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/125057343\\/images\\/","time":"2016-07-19 12:51:30","file":"03.jpg"}]',
                'status'        => 'show',
                'published'     => 'Yes',
                'upload_folder' => '',
                'created_at'    => '2016-07-20 12:38:23',
                'updated_at'    => '2016-07-20 05:21:33',
                'deleted_at'    => null,
            ],
            [
                'user_id'       => '1',
                'title'         => 'BRAND DESIGN',
                'slug'          => 'brand-design-4',
                'details'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
                'category_id'   => '1',
                'image'         => '{"caption":"03","efolder":"portfolios\\/GzzAuOhGsJpeLg\\/image","file":"03.jpg"}',
                'images'        => '[{"caption":"01","efolder":"portfolios\\/GzzAuOhGsJpeLg\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/125141833\\/images\\/","time":"2016-07-19 12:52:17","file":"01.jpg"},{"caption":"02","efolder":"portfolios\\/GzzAuOhGsJpeLg\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/125141833\\/images\\/","time":"2016-07-19 12:52:17","file":"02.jpg"},{"caption":"03","efolder":"portfolios\\/GzzAuOhGsJpeLg\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/125141833\\/images\\/","time":"2016-07-19 12:52:23","file":"03.jpg"},{"caption":"04","efolder":"portfolios\\/GzzAuOhGsJpeLg\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/19\\/125141833\\/images\\/","time":"2016-07-19 12:52:23","file":"04.jpg"}]',
                'status'        => 'show',
                'published'     => 'Yes',
                'upload_folder' => '',
                'created_at'    => '2016-07-20 10:51:55',
                'updated_at'    => '2016-07-20 05:21:55',
                'deleted_at'    => null,
            ],
            [
                'user_id'       => '1',
                'title'         => 'BRAND DESIGN',
                'slug'          => 'brand-design-5',
                'details'       => '<span style="background-color: rgb(229, 229, 229);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</span>',
                'category_id'   => '4',
                'image'         => '{"folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/085748913\\/image\\/","file":"04.jpg","caption":"04","time":"2016-07-20 08:58:29","efolder":"portfolios\\/ell7FYhLcOe8y7\\/image"}',
                'images'        => '[{"folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/085748913\\/images\\/","file":"03.jpg","caption":"03","time":"2016-07-20 08:58:35","efolder":"portfolios\\/ell7FYhLcOe8y7\\/images"},{"folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/085748913\\/images\\/","file":"01.jpg","caption":"01","time":"2016-07-20 08:58:38","efolder":"portfolios\\/ell7FYhLcOe8y7\\/images"},{"folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/085748913\\/images\\/","file":"03.jpg","caption":"03","time":"2016-07-20 08:58:40","efolder":"portfolios\\/ell7FYhLcOe8y7\\/images"}]',
                'status'        => 'show',
                'published'     => 'Yes',
                'upload_folder' => '',
                'created_at'    => '2016-07-20 14:29:24',
                'updated_at'    => '2016-07-20 08:59:24',
                'deleted_at'    => null,
            ],
            [
                'user_id'       => '1',
                'title'         => 'BRAND DESIGN',
                'slug'          => 'brand-design-6',
                'details'       => '<span style="background-color: rgb(229, 229, 229);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</span>',
                'category_id'   => '2',
                'image'         => '{"folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/090402718\\/image\\/","file":"03.jpg","caption":"03","time":"2016-07-20 09:04:14","efolder":"portfolios\\/ell7FYhLc4bL8n\\/image"}',
                'images'        => '[{"caption":"01","efolder":"portfolios\\/oZZpuYhNcvmnpR\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/090053514\\/images\\/","time":"2016-07-20 09:01:23","file":"01.jpg"},{"caption":"03","efolder":"portfolios\\/oZZpuYhNcvmnpR\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/090053514\\/images\\/","time":"2016-07-20 09:01:26","file":"03.jpg"},{"caption":"02","efolder":"portfolios\\/oZZpuYhNcvmnpR\\/images","folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/090053514\\/images\\/","time":"2016-07-20 09:01:28","file":"02.jpg"}]',
                'status'        => 'show',
                'published'     => 'Yes',
                'upload_folder' => '',
                'created_at'    => '2016-07-20 14:34:19',
                'updated_at'    => '2016-07-20 09:04:19',
                'deleted_at'    => null,
            ],
            [
                'user_id'       => '1',
                'title'         => 'BRAND DESIGN',
                'slug'          => 'brand-design-7',
                'details'       => '<span style="background-color: rgb(229, 229, 229);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</span>',
                'category_id'   => '3',
                'image'         => '{"folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/090144305\\/image\\/","file":"01.jpg","caption":"01","time":"2016-07-20 09:02:11","efolder":"portfolios\\/mkkecVhNcXNVzm\\/image"}',
                'images'        => '[{"folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/090144305\\/images\\/","file":"03.jpg","caption":"03","time":"2016-07-20 09:02:15","efolder":"portfolios\\/mkkecVhNcXNVzm\\/images"},{"folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/090144305\\/images\\/","file":"01.jpg","caption":"01","time":"2016-07-20 09:02:18","efolder":"portfolios\\/mkkecVhNcXNVzm\\/images"},{"folder":"\\/uploads\\/portfolios\\/2016\\/07\\/20\\/090144305\\/images\\/","file":"04.jpg","caption":"04","time":"2016-07-20 09:02:20","efolder":"portfolios\\/mkkecVhNcXNVzm\\/images"}]',
                'status'        => 'show',
                'published'     => 'Yes',
                'upload_folder' => '',
                'created_at'    => '2016-07-20 09:02:22',
                'updated_at'    => '2016-07-20 09:02:22',
                'deleted_at'    => null,
            ],

        ]);

        DB::table('portfolio_categories')->insert([
            [
                'user_id'    => '1',
                'name'       => 'HTML',
                'slug'       => 'html',
                'status'     => 'Show',
                'created_at' => '2016-07-19 12:37:15',
                'updated_at' => '2016-07-19 12:37:15',
                'deleted_at' => null,
            ],
            [
                'user_id'    => '1',
                'name'       => 'Word Press',
                'slug'       => 'word-press',
                'status'     => 'Show',
                'created_at' => '2016-07-19 12:37:25',
                'updated_at' => '2016-07-19 12:37:25',
                'deleted_at' => null,
            ],
            [
                'user_id'    => '1',
                'name'       => 'UI/UX',
                'slug'       => 'uiux',
                'status'     => 'Show',
                'created_at' => '2016-07-19 12:37:55',
                'updated_at' => '2016-07-19 12:37:55',
                'deleted_at' => null,
            ],
            [
                'user_id'    => '1',
                'name'       => 'Print',
                'slug'       => 'print',
                'status'     => 'Show',
                'created_at' => '2016-07-19 12:40:22',
                'updated_at' => '2016-07-19 12:40:22',
                'deleted_at' => null,
            ],
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/portfolio/portfolio',
                'name'        => 'Portfolios',
                'description' => null,
                'icon'        => 'fa fa-cubes',
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/portfolio/portfolio',
                'name'        => 'Portfolios',
                'description' => null,
                'icon'        => 'icon-layers',
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'portfolio',
                'name'        => 'Portfolios',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/portfolio/category',
                'name'        => 'Categories',
                'description' => null,
                'icon'        => 'fa fa-bars',
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'portfolio.portfolio.view',
                'name' => 'View Portfolio',
            ],
            [
                'slug' => 'portfolio.portfolio.create',
                'name' => 'Create Portfolio',
            ],
            [
                'slug' => 'portfolio.portfolio.edit',
                'name' => 'Update Portfolio',
            ],
            [
                'slug' => 'portfolio.portfolio.delete',
                'name' => 'Delete Portfolio',
            ],

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

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'key'      => 'portfolio.portfolio.key',
        'name'     => 'Some name',
        'value'    => 'Some value',
        'type'     => 'Default',
        ],
         */
        ]);
    }
}
