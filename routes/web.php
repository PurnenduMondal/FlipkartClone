<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProfileController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'Index'])->name('admin_login_route');

    Route::post('/login', [AdminController::class, 'Login'])->name('admin.login');

    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');

    Route::get('/register', [AdminController::class, 'AdminRegister'])->name('admin.register');

    Route::post('/register', [AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');

    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');

    // Route::get('/', [AdminController::class, 'ViewAll'])->name('admin.admins')->middleware('admin');

    // Route::get('/editpage/{id}', [AdminController::class, 'ViewEditPage'])->name('admin.edit-admin')->middleware('admin');

    // Route::post('/insert', [AdminController::class, 'Insert'])->name('insert_admin')->middleware('admin');

    // Route::post('/update', [AdminController::class, 'Update'])->name('update_admin')->middleware('admin');

    // Route::get('/delete/{id}', [AdminController::class, 'Delete'])->name('delete_admin')->middleware('admin');

});

Route::prefix('admin/product')->group(function () {

    Route::get('/', [ProductController::class, 'ViewAll'])->name('admin.products')->middleware('admin');

    Route::get('/editpage/{id}', [ProductController::class, 'ViewEditPage'])->name('admin.edit-product')->middleware('admin');

    Route::post('/insert', [ProductController::class, 'Insert'])->name('insert_product')->middleware('admin');

    Route::post('/update', [ProductController::class, 'Update'])->name('update_product')->middleware('admin');

    Route::get('/delete/{id}', [ProductController::class, 'Delete'])->name('delete_product')->middleware('admin');
});
// Route::prefix('admin/allusers')->group(function(){

//     Route::get('/', [AllUserController::class, 'ViewAll'])->name('admin.orders')->middleware('admin');

//     Route::get('/editpage/{id}', [AllUserController::class, 'ViewEditPage'])->name('admin.edit-orders')->middleware('admin');

//     Route::post('/insert', [AllUserController::class, 'Insert'])->name('insert_product')->middleware('admin');

//     Route::post('/update', [AllUserController::class, 'Update'])->name('update_product')->middleware('admin');

//     Route::get('/delete/{id}', [AllUserController::class, 'Delete'])->name('delete_product')->middleware('admin');

// });

// Route::prefix('admin/orders')->group(function(){

//     Route::get('/', [OrderController::class, 'ViewAll'])->name('admin.products')->middleware('admin');

//     Route::get('/editpage/{id}', [OrderController::class, 'ViewEditPage'])->name('admin.edit-product')->middleware('admin');

//     Route::post('/insert', [OrderController::class, 'Insert'])->name('insert_product')->middleware('admin');

//     Route::post('/update', [OrderController::class, 'Update'])->name('update_product')->middleware('admin');

//     Route::get('/delete/{id}', [OrderController::class, 'Delete'])->name('delete_product')->middleware('admin');

// });

Route::get('/', [IndexController::class, 'View'])->name('landing_page');

Route::get('/product_details/{id}', [IndexController::class, 'ViewProductDetails'])->name('view_product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'profile', 'middleware' => ['auth']], function () {
    Route::get('/', [UserProfileController::class, 'DisplayUserProfilePage'])->name('user_profile');
    Route::post('/update_personal_information', [UserProfileController::class, 'UpdatePersonalInfo'])->name('submit_personal_info');
    Route::post('/update_email', [UserProfileController::class, 'UpdateEmail'])->name('submit_email');
    Route::post('/update_address', [UserProfileController::class, 'UpdateAddress'])->name('submit_address');
});

Route::get('/viewcart', function () {
    return view('Cart');
})->middleware(['auth'])->name('display_cart');

Route::get('/vieworders', function () {
    return view('Orders');
})->name('view_orders');

require __DIR__ . '/auth.php';
