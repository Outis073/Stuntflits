<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class DiscountController extends Controller
{
    // Show all discounts
    public function index() {  

        return view('discounts.index', [
            'discounts' => Discount::latest()->paginate(6)
        ]);

    }

    // Single discount
    public function show(discount $discount) {

        return view('discounts.show', [
            'discount' => $discount
        ]);

    }

        // Create discount
    public function create() {

        return view('discounts.create');
        
    }

        // Store discount
    public function store(Request $request) {

        
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg'->default('default.jpg'),
            'old_price' => 'required',
            'new_price' => 'required',
            'url' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);


        $imageExtension = $request->image->getClientOriginalExtension();
        $imageName = uniqid() . '.' . $imageExtension;
        
        $request->image->storeAs('public/uploads', $imageName);
        
        $formFields['image'] = 'uploads/' . $imageName; 
        $formFields['user_id'] = auth()->id();

        Discount::create($formFields);

        return redirect('/')->with('message', 'Discount created successfully!');
    }

    
    // Edit discount
    public function edit(Discount $discount) {

        return view('discounts.edit', [
            'discount' => $discount
        ]);
        
    }

    public function update(Request $request, Discount $discount) {

        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image',
            'old_price' => 'required',
            'new_price' => 'required',
            'url' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);


        $discount->update($formFields);

        return back()->with('message', 'Discount updated successfully!');
    }

        // Delete discount
    public function destroy(Discount $discount) {
        // Make sure logged in user is owner
        // if($discount->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }

        $discount->delete();
        return redirect('/')->with('message', 'Discount deleted successfully');
    }
}
