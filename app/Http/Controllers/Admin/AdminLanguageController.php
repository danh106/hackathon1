<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Language;
use Exception;
use Illuminate\Http\Request;

class AdminLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Language::all();
        return view('Admin.Language.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Language.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->only('name');
        Language::create($data);
        return redirect()->route('Admin.Language.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        return view('Admin.Language.Edit',compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        try{
            $data=$request->only('name');
            $language->update($data);
            return redirect()->route('language.index');
       }catch(Exception){
            return redirect()->route('language.index');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $Language)
    {
        try{
            $Language->delete();
            return redirect()->route('language.index');
        }catch(Exception){
            return redirect()->route('language.index');
        }
    }
}
