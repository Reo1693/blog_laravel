<?php

use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return "Welcome to my sample blog project";
});

Route::get('/', [Postcontroller::class , 'home']);

Route::get('/post/{id}', [PostController::class , 'detail'])->where('id','[0-9]+');

Route::get('/old-url' , [Postcontroller::class,'oldUrl' ]);

Route::get('/new-url' , [Postcontroller::class,'newUrl' ])->name('new-url');