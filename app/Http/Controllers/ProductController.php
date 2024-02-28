<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showForm()
    {
        return view('product');
    }

    public function showList()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function store(AddProductRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('products');
    }

    public function delete(int $id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('products');
    }
}
