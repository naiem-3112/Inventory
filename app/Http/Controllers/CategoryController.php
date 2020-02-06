<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'categoryName' => 'required|unique:categories',
            'status' => 'required',
        ]);
        $category = new Category();
        $category->categoryName = $request->categoryName;
        $category->status = $request->status;
        $category->save();
        return back();
    }

    public function edit($id)
    {
        $category = Category::findOrfail($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'categoryName' => 'required|unique:categories,categoryName',
            'status' => 'required',
        ]);
        $category = Category::findOrfail($id);
        $category->categoryName = $request->categoryName;
        $category->status = $request->status;
        $category->save();
        return redirect('category/list');
    }

    public function delete($id)
    {
        $category = Category::findOrfail($id);
        $category->delete();
        return back();
    }

}
