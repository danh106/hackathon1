<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Menu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Menu::all();
        return view('Admin.Menu.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=Menu::all();
        return view('Admin.Menu.Create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->only('menuid','title','isactive','link','levels','parentid','position','createddate','modifieddate');
        $menu=Menu::create($data);
        $menu->save();
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $menus=Menu::where('menuid','!=',$menu->menuid)->where('levels','=',1)->get();
        return view('Admin.Menu.Edit',compact('menu','menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
       try{
            $data=$request->only('menuid','title','isactive','link','levels','parentid','position','createddate','modifieddate');
            $menu->update($data);
            return redirect()->route('menu.index');
       }catch(Exception){
            return redirect()->route('menu.index');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        try{
            $menu->delete();
            return redirect()->route('menu.index');
        }catch(Exception){
            return redirect()->route('menu.index');
        }
    }
    public function isactive(Menu $menu)
    {
        $menu->isactive=!$menu->isactive;
        $menu->save();
        return redirect()->route('menu.index');
    }
}
