<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all() ;
        return view('admin.categories.index', compact('categories'));
    }
    
    public function create()
    {
        return view('admin.categories.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
        
        $category = Category::create($request->all());
        return redirect()->route('admin.categories.edit', $category);
    }
    
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }
    
    public function edit(Category $category)
    {
        return view('admin.categories.edit');
    }
    
    public function update(Request $request, Category $category)
    {
        
    }
    
    public function destroy(Category $category)
    {
        
    }
}
