<?php

use Illuminate\Support\Facades\Route;
// import cac controller
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/posts', [PostsController::class, 'index']);
// resource: CRUD
Route::resource('/foods', FoodsController::class);

// user method get access url
// Route::get("/products", [
//     ProductsController::class,
//     'index'
// ])->name('products');

// how validate id only integer ?
// Route::get("/products/{id}", [
//     ProductsController::class,
//     'detail'
// ])->where('id', '[0-9]+');

// what is string pattern
// Route::get("/products/{productName}/{id}", [
//     ProductsController::class,
//     'detail'
// ])->where('productName', '[a-zA-Z0-9]+');

// two parameter with validate
// Route::get("/products/{productName}/{id}", [
//     ProductsController::class,
//     'detail'
// ])->where([
//     'productName' => '[a-zA-Z0-9]+',
//     'id' => '[0-9]+'
// ]);


// Route::get("/products/{productName}", [
//     ProductsController::class,
//     'detail'
// ]);

// Route::get('/', function () {
//     return view('home');
//     // return view('welcome');
//     // return env('MY_NAME');
// });

// return strings
// Route::get('/users', function(){
//     return 'this is user pages';
// });

// // return an array
// Route::get('/array', function(){
//     return ['home','hello','worl'];
// });

// //return object
// Route::get('/student',function(){
//     return response()->json([
//         'name' => 'hoang hac',
//         'email' => "hoanghac@gmail.com"
//     ]);
// });

// //response another request = redirect
// Route::get('/something', function(){
//     return redirect('/');
// });