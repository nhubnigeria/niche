<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::gest('/login', 'Auth\LoginController@test');


Route::get('test', function() {
    return view('test');
})->name('login');

Route::post('/login', 'Auth\LoginController@login')->name('perform_login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//Users routes
Route::group(['prefix' => 'user', 'middleware' =>[/*'logged.in'*/]], function() {
    Route::get('/', 'UserController@index')->name('users');
    Route::post('/create', 'UserController@store')->name('store_user');
    Route::put('/update/{id}', 'UserController@update')->name('update_user');
    Route::get('/delete/{id}', 'UserController@delete')->name('delete_user');
});

//Couriers routes
Route::group(['prefix' => 'couriers', 'middleware' =>[/*'logged.in'*/]], function() {
    Route::get('/', 'CourierController@index')->name('couriers');
    Route::post('/create', 'CourierController@store')->name('store_courier');
    Route::put('/update/{id}', 'CourierController@update')->name('update_courier');
    Route::get('/delete/{id}', 'CourierController@delete')->name('delete_courier');
});

//Categories routes
Route::group(['prefix' => 'categories', 'middleware' =>[/*'logged.in'*/]], function() {
    Route::get('/', 'CategoryController@index')->name('categories');
    Route::post('/create', 'CategoryController@store')->name('store_category');
    Route::put('/update/{id}', 'CategoryController@update')->name('update_category');
    Route::get('/delete/{id}', 'CategoryController@delete')->name('delete_category');
});

//Sub-Categories routes
Route::group(['prefix' => 'sub-categories', 'middleware' =>[/*'logged.in'*/]], function() {
    Route::get('/', 'SubCategoryController@index')->name('sub_categories');
    Route::post('/create', 'SubCategoryController@store')->name('store_sub_category');
    Route::put('/update/{id}', 'SubCategoryController@update')->name('update_sub_category');
    Route::get('/delete/{id}', 'SubCategoryController@delete')->name('delete_sub_category');
});

Route::get('/', function() {
    return view('welcome');
})->name('index');

Route::get('/landing', function() {
    return view('niche.index');
})->name('landing');

Route::get('/add', function() {
    return view('niche.add');
})->name('add');

Route::get('/admin', function() {
    return view('niche.admin');
})->name('admin');

Route::get('/courier', function() {
    return view('niche.courier');
})->name('courier');

Route::get('/customer', function() {
    return view('niche.customer');
})->name('customer');

Route::get('/help', function() {
    return view('niche.help');
})->name('help');

Route::get('/history', function() {
    return view('niche.history');
})->name('history');

Route::get('/product', function() {
    return view('niche.product');
})->name('product');

Route::get('/settings', function() {
    return view('niche.settings');
})->name('settings');

Route::get('/user', function() {
    return view('niche.user');
})->name('user');

Route::get('/vendor', function() {
    return view('niche.vendor');
})->name('vendor');


// Route::get('main', function() {
//     return view('dashboard');
// })->name('main');
