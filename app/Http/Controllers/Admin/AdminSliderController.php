<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;

class AdminSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Slider::all();
        return view('Admin.Slider.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Slider.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->only('imagepath','title','description','isactive','displayorder','createddate');
        $menu=Slider::create($data);
        $menu->save();
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('Admin.Slider.Edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        try{
            $data=$request->only('imagepath','title','description','isactive','displayorder','createddate');
            $slider->update($data);
            return redirect()->route('slider.index');
       }catch(Exception){
            return redirect()->route('slider.index');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        try{
            $slider->delete();
            return redirect()->route('slider.index');
        }catch(Exception){
            return redirect()->route('slider.index');
        }
    }
    public function isactive(Slider $slider)
    {
        $slider->isactive=!$slider->isactive;
        $slider->save();
        return redirect()->route('slider.index');
    }
}
