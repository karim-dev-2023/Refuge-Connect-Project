<?php

namespace App\Http\Controllers;

use App\Models\Animals;

class IndexController extends Controller
{
    public function index()
    {
        $animals = Animals::all();
        return view('welcome', ["animals" => $animals]);
    }
}
