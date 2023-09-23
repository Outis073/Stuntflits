<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiscountController;
use App\Models\Discount;

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

Route::get('/', [DiscountController::class, 'index'])->name('discounts');

// Route::controller(DiscountController::class)->group(function() {
//     Route::get('/discounts/{discount}', 'show')->name('discounts.show');
//     Route::get('/discounts/{discount}/edit', 'edit')->name('discounts.edit');
// });

Route::resource('discounts', DiscountController::class)->only([
    'index', 'show', 'create', 'edit', 'store', 'update', 'destroy'
]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
