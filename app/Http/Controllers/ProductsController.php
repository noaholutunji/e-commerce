<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
       
       $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        // $this->authorize('update', $product);

       
        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required',
            
            ]);
        $product = auth()->user()->products()->create($attributes);

        return redirect('/products');
    }

    public function update(Product $product)
    {
        $this->authorize('update', $product);

        $attributes = request()->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required',
            ]);

        $product->update($attributes);

        return redirect($product->path());

    }

    
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function destroy(Product $product)
    {
        $this->authorize('update', $product);

        $product->delete();
        
        return redirect('/products');
    }
}
