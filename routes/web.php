<?php

use App\Models\Discount;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiscountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('/discounts', function () {
//     return view('discounts', [
//         'heading' => 'Latest Discounts',
//         'discounts' => Discount::all()
//     ]);
// });

// Route::get('/discounts/{id}', function($id) {
//     return view('discount', [
//         'discount' => Discount::find($id)
//     ]);
// });

Route::controller(DiscountController::class)->group(function () {
    Route::get('/discounts/{id}', 'show');
    Route::get('/discounts', 'index');
    // Route::get('/discounts/create', 'create')->middleware('auth');
});