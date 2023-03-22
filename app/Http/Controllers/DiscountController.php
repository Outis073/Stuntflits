<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class DiscountController extends Controller
{
    public function index(): View
    {
        $discounts = Discount::all();

        return view('discounts.index')
            ->with('discounts', $discounts);

    }
    
    public function show(Discount $discount): View
    {
        return view('discounts.show', [
            'discount' => $discount
        ]);
    }

}