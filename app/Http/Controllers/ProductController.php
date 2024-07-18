<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $name;
    public $price;
    public $description;
    public $img;
    public $imgPath;

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $products = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'img' => $request->img,
        ]);

        $img = $request->File('img') ? $request->file('img')->store('public/img') : 'public/img/default-image.webp';


    $products->save();

    return redirect()->back()->with('message', 'Articolo creato con successo');


return redirect()->back()->with('message', 'Articolo creato con successo');

    }

    /**
     * Display the specified resource.
     */
    public function ShowProduct()
    {
        return view('product.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
