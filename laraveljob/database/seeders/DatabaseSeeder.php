<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Database\Seeder;

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

        Partner::create([
            'company' => 'Walstore',
            'location' => 'Montreal, Canada',
            'address' => '6037 Park Ave',
            'website' => 'https://www.walstore.com',
            'email' => 'walstore@gmail.com',
            'description' => 'Grocery store',
        ]);

        Partner::create([
            'company' => 'PizzaHub',
            'location' => 'Mexico City, Mexico',
            'address' => 'Las Golondrinas 207',
            'website' => 'https://www.pizzahub.mx',
            'email' => 'pizzahub@gmail.com',
            'description' => 'Pizza restaurant',
        ]);

        Partner::create([
            'company' => 'Gronnbutikk',
            'location' => 'Oslo, Norway',
            'address' => 'Herslebs gate 6',
            'website' => 'https://www.gronnbutikk.no',
            'email' => 'gronnbutikk@gmail.com',
            'description' => 'Lifestyle brand',
        ]);

        Partner::create([
            'company' => 'Ziwlow',
            'location' => 'Warsaw, Poland',
            'address' => 'Solidarity Valley 7',
            'website' => 'https://www.ziwlow.pl',
            'email' => 'ziwlow@gmail.com',
            'description' => 'Fashion brand',
        ]);

        Partner::create([
            'company' => 'Alongus',
            'location' => 'Dublin, Ireland',
            'address' => 'Hanover street 19',
            'website' => 'https://www.alongus.ir',
            'email' => 'alongus@gmail.com',
            'description' => 'Security organization',
        ]);

        Partner::create([
            'company' => 'Resonno',
            'location' => 'Rome, Italy',
            'address' => 'Via Celimontana 34',
            'website' => 'https://www.resonno.it',
            'email' => 'resonno@gmail.com',
            'description' => 'Dessert restaurant',
        ]);

        Product::create([
            'title' => 'Website from scratch',
            'type' => 'website',
            'description' => 'Building website from scratch'
        ]);

        Product::create([
            'title' => 'Feature implementation',
            'type' => 'feature',
            'description' => 'Implement a feature for your website'
        ]);

        Product::create([
            'title' => 'Design implementation',
            'type' => 'design',
            'description' => 'Implement website design from Figma, Photoshop, etc.'
        ]);

        Service::create([
            'company' => 'Walstore',
            'product' => 'Walstore website',
            'type' => 'website',
            'description' => 'Walstore home and product page',
            'price' => 3999.99,
            'quantity' => 1,
            'date' => '2019-12-12'
        ]);

        Service::create([
            'company' => 'PizzaHub',
            'product' => 'Pizzahub feature',
            'type' => 'feature',
            'description' => 'PizzaHub delivery & coupon feature',
            'price' => 299.99,
            'quantity' => 2,
            'date' => '2020-05-03'
        ]);

        Service::create([
            'company' => 'Gronnbutikk',
            'product' => 'Gronnbutikk design',
            'type' => 'design',
            'description' => 'Gronnbutikk landing page, homepage, contact page design implementation',
            'price' => 499.99,
            'quantity' => 3,
            'date' => '2021-08-11'
        ]);

        Service::create([
            'company' => 'Ziwlow',
            'product' => 'Ziwlow website design',
            'type' => 'design',
            'description' => 'Ziwlow layout design',
            'price' => 299.99,
            'quantity' => 1,
            'date' => '2019-10-10'
        ]);

        Service::create([
            'company' => 'Alongus',
            'product' => 'Alongus website',
            'type' => 'website',
            'description' => 'Alongus website from scratch',
            'price' => 2999.99,
            'quantity' => 1,
            'date' => '2020-02-03'
        ]);

        Service::create([
            'company' => 'Resonno',
            'product' => 'Resonno personal visit',
            'type' => 'feature',
            'description' => 'Resonno personal visitation feature',
            'price' => 199.99,
            'quantity' => 1,
            'date' => '2021-05-04'
        ]);
    }
}
