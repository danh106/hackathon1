<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Category::all();
        return view('Admin.Category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Category.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->only('categoryid','name','description');
        Category::create($data);
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('Admin.Category.Edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        try{
            $data=$request->only('categoryid','name','description');
            $category->update($data);
            return redirect()->route('category.index');
       }catch(Exception){
            return redirect()->route('category.index');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try{
            $category->delete();
            return redirect()->route('category.index');
        }catch(Exception){
            try{
                $category->isdeleted=1;
                $category->save();
                return redirect()->route('category.index');
            }catch(Exception){
                return redirect()->route('category.index');
            }
        }
    }
}
