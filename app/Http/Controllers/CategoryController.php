<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       $categories = Category::all();
       return view('categories.index', ['categories' => $categories]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => "required|min:4|max:35",
            'detail' => "required",
            'status' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->detail = $request->detail;
        $category->status = $request->status;
        $category->save();
        return redirect()->action([CategoryController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $category = Category::find($id);
        $category->name = $request->name;
        $category->detail = $request->detail;
        $category->status = $request->status;
        $category->save();
        return redirect()->action([CategoryController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
