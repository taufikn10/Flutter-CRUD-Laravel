<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        $subjudul = 'Katalog Lengkap';
        // dd($products);
        return view('products.index', compact(['products', 'subjudul']));
    }

    function create()
    {
        return view('products.create');
    }

    function store(Request $request)
    {
        // dd($request->all());
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact(['product']));
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // $data = $request->all();
        // $data['image_url'] = $request->file('image_url')->store(
        //     'assets/gallery',
        //     'public'
        // );

        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
