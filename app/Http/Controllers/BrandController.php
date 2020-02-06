<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index', compact('brands'));
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'brandName' => 'required|unique:brands',
            'status' => 'required',
        ]);
        $brand = new Brand();
        $brand->brandName = $request->brandName;
        $brand->status = $request->status;
        $brand->save();
        return back();
    }

    public function edit($id)
    {
        $brand = Brand::findOrfail($id);
        return view('brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'brandName' => 'required|unique:brands,brandName',
            'status' => 'required',
        ]);
        $brand = Brand::findOrfail($id);
        $brand->brandName = $request->brandName;
        $brand->status = $request->status;
        $brand->save();
        return redirect('brand/list');
    }

    public function delete($id)
    {
        $brand = Brand::findOrfail($id);
        if ($brand->product->isNotEmpty()){
            return ['type' => 'warning', 'title' => 'Delete Restricted', 'message' => 'This brand product exist yet', 'restrict' => 'restricted'];
        }
        $brand->delete();
        return back();
    }

}
