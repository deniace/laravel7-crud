<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        # code...
        return view("home");
    }

    public function about()
    {
        return view("about", ["nama" => "nama dari controller baru"]);
    }
}
