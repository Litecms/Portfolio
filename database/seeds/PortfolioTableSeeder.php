<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.portfolio.portfolio.model.table'))->insert([
            ['id' => '1', 'title' => 'Peregrine Media', 'details' => '<p style="border: 0px; font-family: &quot;FS Rufus Web Light&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; margin-bottom: 1.625em; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); letter-spacing: 0.75px;">Create a brand identity for Peregrine Media, an aerial photography and high definition video production company that uses custom-built unmanned aerial systems (UAS). Peregrine Media spotted a gap in the aerial imaging market – HD video, shot from otherwise impossible angles, without costing the earth. The challenge was to convey this unique offer in an engaging way, that linked back to its namesake – extraordinary vision empowered by helicopters.</p><h2 style="border: 0px; font-family: &quot;FS Rufus Web Bold&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; font-weight: bold; margin: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; clear: both; color: rgb(51, 51, 51); letter-spacing: 0.75px;">The Solution</h2><p style="border: 0px; font-family: &quot;FS Rufus Web Light&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; margin-bottom: 1.625em; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); letter-spacing: 0.75px;">A beautiful, abstract image of an iris is combined with the spinning rotors of a helicopter.<br><br>The iris device quickly became recognisable and synonymous with the Peregrine Media brand, and could be used in isolation on a range of engaging applications.</p>', 'category_id' => '3', 'image' => '[{"title":"Peregrine projectpage 2","caption":"Peregrine projectpage 2","url":"Peregrine projectpage 2","desc":null,"folder":"2018\\/09\\/21\\/061309498\\/image","time":"2018-09-21 06:15:19","path":"portfolio\\/portfolio\\/2018\\/09\\/21\\/061309498\\/image\\/peregrine-projectpage-2.jpg","file":"peregrine-projectpage-2.jpg"}]', 'images' => '[{"title":"Peregrine projectpage 11","caption":"Peregrine projectpage 11","url":"Peregrine projectpage 11","desc":null,"folder":"2018\\/09\\/21\\/061309498\\/images","time":"2018-09-21 06:15:41","path":"portfolio\\/portfolio\\/2018\\/09\\/21\\/061309498\\/images\\/peregrine-projectpage-11.jpg","file":"peregrine-projectpage-11.jpg"},{"title":"Peregrine projectpage 3","caption":"Peregrine projectpage 3","url":"Peregrine projectpage 3","desc":null,"folder":"2018\\/09\\/21\\/061309498\\/images","time":"2018-09-21 06:16:07","path":"portfolio\\/portfolio\\/2018\\/09\\/21\\/061309498\\/images\\/peregrine-projectpage-3.jpg","file":"peregrine-projectpage-3.jpg"}]', 'slug' => 'peregrine-media', 'subtitle' => 'Brand Identity and Website', 'url' => null, 'published' => 'Yes', 'status' => 'Show', 'user_id' => '1', 'user_type' => 'App\\User', 'upload_folder' => null, 'deleted_at' => null, 'created_at' => '2018-09-21 06:16:13', 'updated_at' => '2018-09-21 06:17:22'],
            ['id' => '2', 'title' => 'Slough Estates Group (SEGRO)', 'details' => '<h2 style="border: 0px; font-family: &quot;FS Rufus Web Bold&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; font-weight: bold; margin: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; clear: both; color: rgb(51, 51, 51); letter-spacing: 0.75px;">The Brief</h2><p style="border: 0px; font-family: &quot;FS Rufus Web Light&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; margin-bottom: 1.625em; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); letter-spacing: 0.75px;">Despite being in a prime location on the M4 corridor, the Winnersh Triangle business park was unloved, dated and saddled with empty office space. As a multi-million pound redevelopment program began, a fresh and exciting Winnersh Triangle brand was required</p><h2 style="border: 0px; font-family: &quot;FS Rufus Web Bold&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; font-weight: bold; margin: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; clear: both; color: rgb(51, 51, 51); letter-spacing: 0.75px;">The Solution</h2><p style="border: 0px; font-family: &quot;FS Rufus Web Light&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; margin-bottom: 1.625em; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); letter-spacing: 0.75px;">The park hopes to attract big thinkers, and this was the starting point. The brand idea ‘Opportunity in Everything’ was created, and all levels of communication were reinvented. Print, web, advertising and environmental applications were all overhauled. On a larger scale, several international artists were brought in to transform the park by creating dramatic works of art, all from everyday objects. The new brand forced potential clients to reconsider Winnersh Triangle, and position it at the forefront of ambitious business thinking</p>', 'category_id' => '1', 'image' => '[{"title":"Wt projectpage 2","caption":"Wt projectpage 2","url":"Wt projectpage 2","desc":null,"folder":"2018\\/09\\/21\\/063911457\\/image","time":"2018-09-21 06:39:41","path":"portfolio\\/portfolio\\/2018\\/09\\/21\\/063911457\\/image\\/wt-projectpage-2.jpg","file":"wt-projectpage-2.jpg"}]', 'images' => '[{"title":"Wt projectpage 3","caption":"Wt projectpage 3","url":"Wt projectpage 3","desc":null,"folder":"2018\\/09\\/21\\/063911457\\/images","time":"2018-09-21 06:39:45","path":"portfolio\\/portfolio\\/2018\\/09\\/21\\/063911457\\/images\\/wt-projectpage-3.jpg","file":"wt-projectpage-3.jpg"}]', 'slug' => 'slough-estates-group-segro', 'subtitle' => 'Winnersh Triangle Brand Identity', 'url' => null, 'published' => 'Yes', 'status' => 'Show', 'user_id' => '1', 'user_type' => 'App\\User', 'upload_folder' => null, 'deleted_at' => null, 'created_at' => '2018-09-21 06:39:46', 'updated_at' => '2018-09-21 06:43:17'],
            ['id' => '3', 'title' => 'Firebird Apps', 'details' => '<h2 style="border: 0px; font-family: &quot;FS Rufus Web Bold&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; font-weight: bold; margin: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; clear: both; color: rgb(51, 51, 51); letter-spacing: 0.75px;">The Brief</h2><p style="border: 0px; font-family: &quot;FS Rufus Web Light&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; margin-bottom: 1.625em; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); letter-spacing: 0.75px;">Good Sort provides the ability to sort Facebook posts by popularity or by date. Users can discover which posts attracted the most likes, comments and shares. Upon finding the best posts, users can then collect their favourites.</p><p style="border: 0px; font-family: &quot;FS Rufus Web Light&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; margin-bottom: 1.625em; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); letter-spacing: 0.75px;">An identity, user interface and website were required that would bring this app to life.</p><h2 style="border: 0px; font-family: &quot;FS Rufus Web Bold&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; font-weight: bold; margin: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; clear: both; color: rgb(51, 51, 51); letter-spacing: 0.75px;">The Solution</h2><p style="border: 0px; font-family: &quot;FS Rufus Web Light&quot;, Rockwell, Verdana, sans-serif; font-size: 13px; margin-bottom: 1.625em; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); letter-spacing: 0.75px;">Foraging through Facebook to find the best posts, the app takes on the personality of a squirrel. The identity, user interface and website all have fun with this engaging, unexpected and memorable theme.</p>', 'category_id' => '2', 'image' => '[{"title":"Good sort projectpage 1","caption":"Good sort projectpage 1","url":"Good sort projectpage 1","desc":null,"folder":"2018\\/09\\/21\\/064029164\\/image","time":"2018-09-21 06:41:43","path":"portfolio\\/portfolio\\/2018\\/09\\/21\\/064029164\\/image\\/good-sort-projectpage-1.jpg","file":"good-sort-projectpage-1.jpg"}]', 'images' => '[{"title":"Good sort projectpage 2a","caption":"Good sort projectpage 2a","url":"Good sort projectpage 2a","desc":null,"folder":"2018\\/09\\/21\\/064029164\\/images","time":"2018-09-21 06:42:05","path":"portfolio\\/portfolio\\/2018\\/09\\/21\\/064029164\\/images\\/good-sort-projectpage-2a.jpg","file":"good-sort-projectpage-2a.jpg"}]', 'slug' => 'firebird-apps', 'subtitle' => 'Good Sort', 'url' => null, 'published' => 'Yes', 'status' => 'Show', 'user_id' => '1', 'user_type' => 'App\\User', 'upload_folder' => null, 'deleted_at' => null, 'created_at' => '2018-09-21 06:42:07', 'updated_at' => '2018-09-21 06:42:39'],
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

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/portfolio/portfolio',
                'name'        => 'Portfolio',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/portfolio/portfolio',
                'name'        => 'Portfolio',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'portfolio',
                'name'        => 'Portfolio',
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
        'module'    => 'Portfolio',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'portfolio.portfolio.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
