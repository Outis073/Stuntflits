<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Discount;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Discount::create([
            
            'id' => 1,
            'title' => 'Discount One',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo consequat.',
            'url' => 'https://bymillie.nl',
            'PriceDiscount' => '20',
            'LowestPrice' => '25',
            'Shippingcost' => '5,25',
            'StartDate' => '2014,07,22',
            'EndDate' => '2023,07,22'
        ]);

        Discount::create([
            
            'id' => 2,
            'title' => 'Discount Two',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo consequat.',
            'url' => 'https://google.nl',
            'PriceDiscount' => '30',
            'LowestPrice' => '77',
            'Shippingcost' => '5,25',
            'StartDate' => '2016,07,22',
            'EndDate' => '2026,07,22'

        ]);
    }
}