<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProva;


Route::get("/home",function(){
    $data = "Primi passi con Laravel";
    return view("home", ["message" => $data]);
})->name("home");

Route::get("/contacts", function(){
    $contacts ="I nostri contatti";
    return view("contacts", compact("contacts"));
})->name("contacts");

Route::get("/about", [ControllerProva::class, "about"])->name("about");
