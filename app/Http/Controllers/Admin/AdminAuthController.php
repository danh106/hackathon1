<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function login()
    {
        if (!session()->has('adminlogin')) {
            session(['adminlogin' => 0]);
        }
        return view('Admin.Auth.login');
    }

    public function checklogin(Request $request)
    {
        if(session("adminlogin")>5){
            $secret = '6LcvRjcrAAAAACXcAfdZLBMlHbAdxiVzyK48ySiS';
            $response = request('g-recaptcha-response');
            $remoteip = $request->ip();
            $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
            $data = json_decode($verify);
            if(!$data->success){
                return back()->withErrors(['username' => 'Vui lòng xác thực bạn không phải người máy!']);
            }
        }
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (auth('admin')->attempt($credentials)) {
            $user = auth('admin')->user();
            if ($user->isactive == 0) {
                auth('admin')->logout();
                session(['adminlogin' => session('adminlogin') + 1]);
                return back()->withErrors(['username' => 'Tài khoản của bạn đã bị khóa vui lòng liên hệ admin.']);
            }
            if ($user->role && $user->role->name != 'admin') {
                auth('admin')->logout();
                session(['adminlogin' => session('adminlogin') + 1]);
                return back()->withErrors(['username' => 'Bạn không phải admin.']);
            }
            $request->session()->regenerate();
            session(['adminlogin' => session('adminlogin') - 1]);
            return redirect()->intended('/admin/menu');
        }
        session(['adminlogin' => session('adminlogin') + 1]);
        return back()->withErrors(['username' => 'Sai tài khoản hoặc mật khẩu.']);
    }

    public function logout()
    {
        auth('admin')->logout();
        return redirect()->route('admin.login');
    }
}
