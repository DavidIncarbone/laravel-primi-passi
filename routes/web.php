<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProva;


Route::get('/home', [ControllerProva::class, "index"])->name("home");
Route::get("/contacts", [ControllerProva::class, "contacts"])->name("contacts");
Route::get("/about", [ControllerProva::class, "about"])->name("about");
