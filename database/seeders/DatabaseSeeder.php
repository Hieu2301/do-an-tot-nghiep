<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'hieu',
                'email' => 'hieu@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => 1234567890,
                'level' => 0,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => 1234567890,
                'level' => 1,
            ],
        ]);



        DB::table('brands')->insert([
            [
                'name' => 'Caltex',
            ],
            [
                'name' => 'Castrol',
            ],
            [
                'name' => 'Maxxis',
            ],
            [
                'name' => 'SRT',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Lốp xe',
            ],
            [
                'name' => 'Dầu nhớt',
            ],
            [
                'name' => 'Nhông sên',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'CALTEX HAVOLINE 4T 20W50 0,8 LÍT',
                'description' => 'ádasf',
                'price' => 62000,
                'qty' => 20,
                'image' => 'CALTEX HAVOLINE 4T 20W50 0,8 LÍT.jpg',
                'featured' => true,
            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'castrol số',
                'description' => null,
                'price' =>42000,
                'qty' => 20,
                'image' => 'castrol số.jpg',
                'featured' => true,
            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'product_category_id' => 1,
                'name' => 'chengshin 8090-14',
                'description' => null,
                'price' => 213000,
                'qty' => 20,
                'image' => 'chengshin 8090-14.jpg',
                'featured' => true,
            ],
            [
                'id' => 4,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'maxxis 8090-17 ko ruot',
                'description' => null,
                'price' => 264000,
                'qty' => 20,
                'image' => 'maxxis 8090-17 ko ruot.jpg',
                'featured' => true,
            ],

            [
                'id' => 5,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => "irc 8090-14",
                'description' => null,
                'price' => 153000,
                'qty' => 20,
                'image' => 'irc 8090-14.jpg',
                'featured' => true,
            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'srt exciter135',
                'description' => null,
                'price' => 142000,
                'qty' => 20,
                'image' => 'srt exciter135.jpg',
                'featured' => true,
            ],
            [
                'id' => 7,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'srt exciter150',
                'description' => null,
                'price' => 221000,
                'qty' => 20,
                'image' => 'srt exciter150.jpg',
                'featured' => true,
            ],
            [
                'id' => 8,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'sirius taka',
                'description' => null,
                'price' => 129000,
                'qty' => 20,
                'image' => 'sirius taka.jpg',
                'featured' => true,
            ],
            [
                'id' => 9,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'castrol 4t 1lit',
                'description' => null,
                'price' => 114000,
                'qty' => 20,
                'image' => 'castrol 4t 1lit.jpg',
                'featured' => true,
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'qty' => 0,
            ],
            [
                'product_id' => 1,
                'qty' => 0,
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'Steven@gmail.com',
                'name' => 'Steve',
                'messages' => 'Nice !',
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'Tony@gmail.com',
                'name' => 'Tony',
                'messages' => 'Nice !',
            ],
        ]);
    }
}

