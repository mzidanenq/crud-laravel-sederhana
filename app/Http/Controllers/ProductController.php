<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function index() 
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->nama,
            'price' => $request->price,
            'merek' => $request->merek,
            'kuantitas' => $request->kuantitas
        ]);

        return redirect('product');
    }

    public function view()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        Product::findOrFail($id)->update([
            'name' => $request->nama,
            'price' => $request->price,
            'merek' => $request->merek,
            'kuantitas' => $request->kuantitas
        ]);
        return redirect('product');
    }
}
