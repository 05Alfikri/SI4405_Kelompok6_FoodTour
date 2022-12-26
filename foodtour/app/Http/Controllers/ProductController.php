<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product::orderBy('id', 'desc')->get();
        return view('product, index', compact('product'));
    
    }
    public function create()
    {
        return view('product, create');
    }
    public function store(Request $request)
    {
        $imgName = $request->img_path->getClientOriginalName() . '-' . time()
            . '-' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);
        Product::create([
            'nama' => $request->name,
            'harga' => $request->price,
            'gambar' => $imgName
        ]);
        return redirect('/product');
    }
}
