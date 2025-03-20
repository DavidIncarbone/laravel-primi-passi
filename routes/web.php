<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProva;


Route::get('/', [ControllerProva::class, "index"]);
Route::get("/contacts", [ControllerProva::class, "contacts"]);
Route::get("/about", [ControllerProva::class, "about"]);
