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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/zhkdetails', function () {
    return view('zhkdetails');
})->name('zhkdetails');


Route::middleware("auth:web")->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
   // Route::post('/posts/comment/{id}', [\App\Http\Controllers\PostController::class, 'comment'])->name('comment');
});

Route::middleware("guest:web")->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');
});

Route::get('add-to-cart/{id}', '\App\Http\Controllers\CartController@addToCart');

Route::get('/Zhk', '\App\Http\Controllers\AllzhkController@allData')->name('allData');

Route::get('/prediction', '\App\Http\Controllers\PredictionController@prediction')->name('predict');

//Route::get('/newBuildings', '\App\Http\Controllers\AllzhkController@allData')->name('newBuildings');


//show all zhk separately
Route::get('/{cat}/{zhk_id}', '\App\Http\Controllers\AllzhkController@getZhk')->name('show_zhk');

// show category
//Route::get('/{cat}', '\App\xHttp\Controllers\AllzhkController@showCategory')->name('showCategory');

//cart
Route::get('cart', '\App\Http\Controllers\CartController@cart')->name('cart');
Route::get('add-to-cart/{id}', '\App\Http\Controllers\CartController@addToCart');

//update cart
Route::patch('update-cart', 'ProductsController@update');
//del cart
Route::delete('remove-from-cart', 'ProductsController@remove');

Route::get('/builder', '\App\Http\Controllers\BuilderController@showBuilder')->name('builder');

//Route::get('/profile', '\App\Http\Controllers\AuthController@showBuilder')->name('builder');

// comments
Route::post('comments/{zhk_id}', ['uses' => '\App\Http\Controllers\CommentsController@store', 'as' => 'comments.store']);

//
Route::get('/profile', '\App\Http\Controllers\AuthController@showProfile')->name('profile');
