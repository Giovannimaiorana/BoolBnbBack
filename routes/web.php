<?php


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\ProfileController;
use App\Models\Message;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/addApartment', [ApartmentController::class, 'index'])->name('addApartment');




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('apartments', ApartmentController::class);
    Route::get('/apartments/{id}/edit', [ApartmentController::class, 'edit'])->name('apartments.edit');


    Route::resource('messages', MessageController::class);
    Route::get('apartments/{apartment_id}/messages', [MessageController::class, 'index'])->name('messages.index');

    // Route::resource('products', ProductController::class);
    // Route::delete('delete-image/{path}', [DeleteImg::class, 'delete'])->name('delete.img');
    // Route::resource('ordersDetails', OrderDetailsController::class)->only('index', 'show');
});


require __DIR__ . '/auth.php';
