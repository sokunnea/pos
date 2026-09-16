<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = DB::table('products')->selectRaw('*')->get();
        return view('product.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'product_en' => 'required|max:255',
        //     'product_kh' => 'required',
        //     'status' => 'required',
        // ]);

        // Product::create($validated);

        $product                    = new Product();
        $product->product_en        = $request->product_en;
        $product->product_kh        = $request->product_kh;
        $product->status            = $request->status;
        $product->save();
        return redirect()->route('product.index');
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $product = DB::table('products')->selectRaw('*')->where('id',2)->first();
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // $product = DB::table('products')->selectRaw('*')->where('id',2)->first();
        // dd($product);
        return view('product.edit', compact('product'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->product_en        = $request->product_en;
        $product->product_kh        = $request->product_kh;
        $product->status            = $request->status;
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        return redirect()->route('product.index');
    }
    private function getHelloFunction($test_value){
        return $test_value;
    }
}
