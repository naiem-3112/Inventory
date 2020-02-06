<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        return view('product.create', compact('brands', 'categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'productName' => 'required|unique:products',
            'brand_id' => 'required',
            'category_id' => 'required',
            'buyingPrice' => 'required',
            'sellingPrice' => 'required',
            'status' => 'required',
        ]);
        $product = new Product();
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->productName = $request->productName;
        $product->buyingPrice = $request->buyingPrice;
        $product->sellingPrice = $request->sellingPrice;
        $product->status = $request->status;
        $product->save();
        return back();
    }

    public function edit($id)
    {
        $product = Product::findOrfail($id);
        $categories = Category::where('status', 1)->get()->except($product->category_id);
        $brands = Brand::where('status', 1)->get()->except($product->brand_id);
        return view('product.edit', compact('product', 'brands', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'productName' => 'required|unique:products,productName',
            'brand_id' => 'required',
            'category_id' => 'required',
            'buyingPrice' => 'required',
            'sellingPrice' => 'required',
            'status' => 'required',
        ]);
        $product = Product::findOrfail($id);
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->productName = $request->productName;
        $product->buyingPrice = $request->buyingPrice;
        $product->sellingPrice = $request->sellingPrice;
        $product->status = $request->status;
        $product->save();
        return redirect('product/list');
    }

    public function delete($id)
    {
        $product = Product::findOrfail($id);
        $product->delete();
        return back();
    }
}
