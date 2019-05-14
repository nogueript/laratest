<?php

use App\Notifications\TryNotify;
use App\User;
use Carbon\Carbon;

Route::get('/', 'PagesController@getIndex');

Route::get('/imlost', 'PagesController@getImLost');

Route::get('maskAsRead', function(){
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markRead');

Route::get('/contact', 'PagesController@getContact');

Route::get('/obj', 'PagesController@getObj');

Route::get('/about', 'PagesController@getAbout');

Route::get('/chat', 'ChatController@chat');

Route::post('/send', 'ChatController@send');

Route::post('/contact/submit', 'MessagesController@submit');

Auth::routes();
