<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view("index");
    }

    public function about()
    {
        // $name = "hoang";
        $name_array = ["John", "Mad", "David", "Jay"];
        $name_array1 = [];
        // return view("about")->with('name', $name);
        return view("about", [
            'name_array' => $name_array,
            'name_array1' => $name_array1
        ]);
    }
}
