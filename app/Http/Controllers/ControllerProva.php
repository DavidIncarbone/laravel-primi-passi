<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProva extends Controller
{

    public function index()
    {
        $data = "Primi passi con Laravel";
        return view("home", ["message" => $data]);
    }
}
