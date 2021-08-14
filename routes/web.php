<?php

use App\Http\Controllers\PaginationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
Route::get('allPosts',[PostsController::class ,'allpostsfromModel']);
Route::get('innerJoin',[PostsController::class,'innerrJoin']);
Route::get('allusers',[PaginationController::class,'allusers']);
