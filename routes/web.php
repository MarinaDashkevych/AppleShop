<?php
//
use Illuminate\Support\Facades\Route;

//Route::get('/', 'MainController@index')->name('index');
//Route::get('/categories', 'MainController@categories')->name('categories');
//Route::get('/{category}', 'MainController@category')->name('category');
//Route::get('/mobiles/{product}', 'MainController@product')->name('product');
//Route::get('/basket', 'MainController@basket')->name('basket');
//Route::get('/basket/place', 'MainController@basketPlace')->name('basket-place');

use App\Http\Controllers\MainController;

Route::get('index', [MainController::class ,'index']);

Route::get('/basket', [\App\Http\Controllers\BasketController::class ,'basket']);
Route::post('/basket/add{id}', [\App\Http\Controllers\BasketController::class, 'basket-add']);
Route::get('/basket/place', [\App\Http\Controllers\BasketController::class ,'basket-place']);

Route::get('categories',[MainController::class, 'categories']);

Route::get('/{category}', [MainController::class ,'category']);

Route::get('/{category}/{product}',[MainController::class ,'product']);




//Route::get('/basket', [MainController::class ,'basket']); // перенесла роут basket перед category
//Route::get('/basket/place', [MainController::class ,'basket-place']);

//Route::post('/basket/add{id}', 'BasketController@bascketAdd')->name('basketAdd'); так в оригинале
