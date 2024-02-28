<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddOrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showForm()
    {
        $products = Product::all();

        return view('order', compact('products'));
    }

    public function showList()
    {
        $orders = Order::with('product')->where('days', '>', 0)->get();

        $expired_orders = Order::with('product')->where('days', 0)->get();

        return view('orders', compact('orders', 'expired_orders'));
    }

    public function store(AddOrderRequest $request)
    {
        $validated = $request->validated();
        $product = Product::find($validated['product_id']);
        $days = round($product->max_use / $validated['daily_use']);

        Order::create([
            'fname'=> $validated['fname'],
            'lname'=> $validated['lname'],
            'phone'=> $validated['phone'],
            'daily_use'=> $validated['daily_use'],
            'product_id'=> $validated['product_id'],
            'days'=> $days
        ]);

        return redirect()->route('orders');
    }

    public function delete(int $id)
    {
        Order::findOrFail($id)->delete();

        return redirect()->route('orders');
    }
}
