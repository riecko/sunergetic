<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Customers
Route::group(['middleware' => ['auth', 'verified']], function() {
    
    //Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //List
    Route::get('customer', [CustomerController::class, 'list'])
                ->name('customer');
    //Create
    Route::get('customer/create', [CustomerController::class, 'create'])
                ->name('customer.create');    
    //Store
    Route::post('customer/store', [CustomerController::class, 'store'])
                ->name('customer.store');
    //Edit
    Route::post('customer/edit', [CustomerController::class, 'edit'])
                ->name('customer.edit');
    //Update
    Route::put('customer/update', [CustomerController::class, 'update'])
                ->name('customer.update');            
    //Destroy
    Route::delete('customer/destroy', [CustomerController::class, 'destroy'])
                ->name('customer.destroy');
});

require __DIR__.'/auth.php';
