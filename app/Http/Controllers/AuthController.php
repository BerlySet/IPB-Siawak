<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chairman;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            // $isChairman = Chairman::where('c_nim', $user->nim)->get();

            // if (count($isChairman)) {
            //     return redirect()->intended('dashboard');  
            // }
            return redirect()->intended('dashboard');  
        }

        return view('login');
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],
    
        [
            'email.required'=>'Email harus diisi',
            'password.required'=>'Password harus diisi',
        ]);

        $kredensil = $request->only('email', 'password');

        if (Auth::attempt($kredensil, true)) {
            $user = Auth::user();
            // return($user);

            $isChairman = Chairman::where('c_nim', $user->nim)->get();

            if (count($isChairman)) {
                return redirect()->intended('dashboard');  
                // return($isChairman);
            }
            
            return redirect('login')->with('error', 'kamu bukan ketua ormawa, hubungi kami jika terjadi kesalahan!');
        }

        return redirect('login')->withInput()->withErrors(['login_gagal' => 'email atau password anda salah!']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
