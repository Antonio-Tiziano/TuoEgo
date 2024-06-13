<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function Welcome()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
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
