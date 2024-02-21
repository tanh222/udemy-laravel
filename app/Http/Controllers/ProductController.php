<?php

namespace App\Http\Controllers;

use App\Http\Models\Post;
use App\Http\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::all();
        return view('project-management.product', compact('products'));
    }

    public function createProduct()
    {
        return view('project-management.create');
    }

    public function customCreate(Request $request)
    {

        $request->validate([
            'name' => 'required|max:30',
            'describe' => 'required|max:300',
            'price' => 'required',
        ]);
        $data = new Product;
        $data->name = $request->name;
        $data->describe = $request->describe;
        $data->price = $request->price;
        $data->save();
        return redirect('product');
    }

    public function updateProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('project-management.update', compact('product'));
    }

    public function customUpdate(Request $request,$id)
    {

        $request->validate([
            'name' => 'required|max:30',
            'describe' => 'required|max:300',
            'price' => 'required',
        ]);
        $data = Product::find($id);
        $data->name = $request->name;
        $data->describe = $request->describe;
        $data->price = $request->price;
        $data->save();
        return redirect('product');
    }
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('product');

    }

}
