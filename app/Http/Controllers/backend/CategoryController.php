<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Category::orderBy('id','desc',)->get();



        return view('backend.category.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'details' => 'required',

        ]);

        $category= new Category;
        $category->name= $request->name;
        $category->details= $request->details;

        $category->save();
        return redirect()->route('category.index')->with('msg', "successfully created");

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('backend.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([

            'name' => 'required',
            'details' => 'required',

        ]);

        
        $category->name= $request->name;
        $category->details= $request->details;

        $category->update();
        return redirect()->route('category.index')->with('msg', "successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('msg', "successfully deleted");
    }
}
