<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Discount extends Model
class Discount
{
    public static function all() {
        [
            [
                'id' => 1,
                'title' => 'Discount One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat.',
                'url' => '',
                'PriceDiscount' => '',
                'LowestPrice' => '',
                'Shippingcost' => '',
                'StartDate' => '',
                'EndDate' => ''
            ],

            [
                'id' => 2,
                'title' => 'Discount Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat.',
                'url' => '',
                'PriceDiscount' => '',
                'LowestPrice' => '',
                'Shippingcost' => '',
                'StartDate' => '',
                'EndDate' => ''
            ]
            ];
    }
}