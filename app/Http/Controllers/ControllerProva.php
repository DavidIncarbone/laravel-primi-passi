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

    public function contacts()
    {

        $data = "I nostri contatti";
        return view("contacts", ["contacts" => $data]);
    }
    public function about()
    {

        $data = "A proposito di noi";
        return view("about", ["about" => $data]);
    }
}
