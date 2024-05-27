<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function Welcome()
    {
        return view('welcome');
    }
}
