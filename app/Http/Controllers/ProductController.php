<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('pages.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photos')) {
            $gambar = $request->photos;
            $filename = time() . '.webp';
            $gambar->move(public_path('upload/product'), $filename);
            $savegambar = 'upload/product/' . $filename;
            $request['photo'] = $savegambar;
        }
        Product::create($request->all());
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Product::findOrFail($id);
        return view('pages.product.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Product::findOrFail($id);
        return view('pages.product.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        if ($request->hasFile('photos')) {
            $gambar = $request->photos;
            $filename = time() . '.webp';
            $gambar->move(public_path('upload/product'), $filename);
            $savegambar = 'upload/product/' . $filename;

            $inputdata = [
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'photo' => $savegambar,
            ];
        } else {
            $inputdata = [
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'price' => $request->price,
            ];
        }
        $product->update($inputdata);
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();
        return redirect(route('products.index'));
    }
}
