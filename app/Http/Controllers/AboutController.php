<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $name = 'Dill Doe';

        return view('about', compact('name'));
    }
}
