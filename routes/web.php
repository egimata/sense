<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is the user '.$id;
});


Route::get('/', 'App\Http\Controllers\PagesController@index')->name('/');
Route::get('/menu', 'App\Http\Controllers\PagesController@menu')->name('pages.menu');
Route::get('/restaurant-menu', 'App\Http\Controllers\PagesController@resto')->name('pages.resto');
Route::get('/contact', 'App\Http\Controllers\ContactController@create')->name('pages.contact');
Route::post('/contact', 'App\Http\Controllers\ContactController@contact')->name('contact.store');

Route::prefix('menu-bar')->group(function(){
    Route::middleware('auth')->group(function(){
        Route::resource('menu-category', 'App\Http\Controllers\MenuBar\MenuCategoriesController');
        Route::resource('menu-subcategory', 'App\Http\Controllers\MenuBar\MenuSubCategoriesController');
        Route::resource('menu-product', 'App\Http\Controllers\MenuBar\MenuProductsController');
    });
});
Route::prefix('menu-resto')->group(function(){
    Route::middleware('auth')->group(function(){
        Route::resource('resto-category', 'App\Http\Controllers\MenuResto\RestoMenuCategoriesController');
        Route::resource('resto-product', 'App\Http\Controllers\MenuResto\RestoMenuProductsController');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
