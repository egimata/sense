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


Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/menu', 'App\Http\Controllers\PagesController@menu')->name('pages.menu');

Route::prefix('menu-bar')->group(function(){
    Route::middleware('auth')->group(function(){
        Route::resource('menu-category', 'App\Http\Controllers\MenuBar\MenuCategoriesController');
        Route::resource('menu-subcategory', 'App\Http\Controllers\MenuBar\MenuSubCategoriesController');
        Route::resource('menu-product', 'App\Http\Controllers\MenuBar\MenuProductsController');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
