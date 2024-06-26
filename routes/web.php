<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;
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
    return view('friend');
});


//route lay du lieu promotion
Route::get('/get-friends', [FriendController::class,'getFriend']);

// route search people
Route::get('/search-people', [FriendController::class,'searchPeople']);
