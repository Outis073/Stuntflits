<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DiscountController extends Controller
{
    // Show all discounts
    public function index() {  

        return view('discounts.index', [
            'discounts' => Discount::latest()->paginate(6)
        ]);

    }

    // Single discount
    public function show() {

    }
}
