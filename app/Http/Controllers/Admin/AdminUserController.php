<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Role;
use App\Models\user;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\fileExists;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=User::with(['role'])->get();
        return view('Admin.User.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role=Role::all();
        return view('Admin.User.Create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->only('name','address','phonenumber','username','password','roleid','email','createddate','isactive');
        if ($request->has('avatar')) {
            $filename = $request->avatar->hashName();
            $request->avatar->move(public_path('uploads/images/users'),$filename);
            $data['avatar']="/uploads/images/users/".$filename;
        }
        User::create($data);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $role=Role::all();
        return view('Admin.User.Edit',compact('role','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try{
            $data=$request->only('name','address','phonenumber','username','password','roleid','email','isactive');
            if ($request->has('avatar')) {
                if (File::exists(public_path($user->avatar))) {
                    File::delete(public_path($user->avatar));
                }
                $filename = $request->avatar->hashName();
                $request->avatar->move(public_path('uploads/images/users'),$filename);
                $data['avatar']="/uploads/images/users/".$filename;
            }
            $user->update($data);
            return redirect()->route('user.index');
       }catch(Exception){
            return redirect()->route('user.index');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try{
            $user->delete();
            return redirect()->route('user.index');
        }catch(Exception){
            return redirect()->route('user.index');
        }
    }
}
