<?php
use Illuminate\Support\Facades\Route;
Route::group(['middleware' => ['throttle:100,1']],function(){


Route::get('/', \App\Http\Controllers\Welcome::class)->name('/');
Route::get('/{key}', \App\Http\Controllers\Findkey::class)->name('findkey');



});   


 