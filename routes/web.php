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
use App\Models\Post;
use App\Models\User;
use App\Models\Address;

Route::get('/{id}/address', function($id){
    $user=User::find($id);
    $address=Address::find($id);
    return "ユーザー番号".$id."番の住所:".$user->address->address."。名前は".$address->user->name."です。";
});

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::post('/', 'App\Http\Controllers\PagesController@save');

Route::get('/bbs', 'App\Http\Controllers\BbsController@index');
Route::post('/bbs', 'App\Http\Controllers\BbsController@create');
Route::post('/bbsFav', 'App\Http\Controllers\BbsController@fav');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
