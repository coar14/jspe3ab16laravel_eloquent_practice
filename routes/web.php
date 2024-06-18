<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Relation;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/author/books/{id}',[Relation::class,'getBooksByAuthor']);

