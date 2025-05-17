<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Publisher;
use Exception;
use Illuminate\Http\Request;

class AdminPublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Publisher::all();
        return view('Admin.Publisher.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Publisher.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->only('name','email','description');
        Publisher::create($data);
        return redirect()->route('publisher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        return view('Admin.Publisher.Edit',compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        try{
            $data=$request->only('name','email','description');
            $publisher->update($data);
            return redirect()->route('publisher.index');
       }catch(Exception){
            return redirect()->route('publisher.index');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        try{
            $publisher->delete();
            return redirect()->route('publisher.index');
        }catch(Exception){
            return redirect()->route('publisher.index');
        }
    }
}
