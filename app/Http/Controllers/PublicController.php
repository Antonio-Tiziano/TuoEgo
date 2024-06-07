<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function Welcome()
    {
        return view('welcome');
    }

    public function Profil()
    {
        return view('profile.user');
    }

    public function AddProduct()
    {
        return view('profile.product');
    }


}
