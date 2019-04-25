<?php

use App\Notifications\TryNotify;
use App\User;
use Carbon\Carbon;
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
Route::get('/', 'PagesController@getIndex');

Route::get('/imlost', 'PagesController@getImLost');

Route::get('/haha', 'PagesController@getHaha');

Route::get('maskAsRead', function(){
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markRead');

Route::get('/contact', 'PagesController@getContact');

Route::get('/obj', 'PagesController@getObj');

Route::get('/about', 'PagesController@getAbout');

Route::get('chat', 'ChatController@chat');

Route::post('send', 'ChatController@send');

Route::post('/contact/submit', 'MessagesController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


