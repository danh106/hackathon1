<?php
namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AuthController extends Controller{
    public function login()
    {
        if (!session()->has('userlogin')) {
            session(['userlogin' => 0]);
        }
        return view('Auth.login');
    }

    public function checklogin(Request $request)
    {
        if(session("userlogin")>5){
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

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if ($user->isactive == 0) {
                auth()->logout();
                session(['userlogin' => session('userlogin') + 1]);
                return back()->withErrors(['username' => 'Tài khoản của bạn đã bị khóa vui lòng liên hệ admin.']);
            }
            /*if ($user->role && $user->role->name != 'admin') {
                auth()->logout();
                session(['userlogin' => session('userlogin') + 1]);
                return back()->withErrors(['username' => 'Bạn không phải admin.']);
            }*/
            $request->session()->regenerate();
            session(['userlogin' => session('userlogin') - 1]);
            return redirect()->intended('/');
        }
        session(['userlogin' => session('userlogin') + 1]);
        return back()->withErrors(['username' => 'Sai tài khoản hoặc mật khẩu.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
?>