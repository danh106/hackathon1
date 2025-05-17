<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Movie;
use Exception;
use Illuminate\Http\Request;

class AdminAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Author::all();
        return view('Admin.Author.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Author.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->only('name','image','biography');
        Author::create($data);
        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('Admin.Author.Edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
       try{
            $data=$request->only('name','image','biography');
            $author->update($data);
            return redirect()->route('author.index');
       }catch(Exception){
            return redirect()->route('author.index');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        try{
            $author->delete();
            return redirect()->route('author.index');
        }catch(Exception){
            return redirect()->route('author.index');
        }
    }
}
