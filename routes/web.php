<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProva;


Route::get(
    '/',
    [ControllerProva::class, "index"]
);
