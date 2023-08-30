<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function register()
    {
        return view('/register');
    }

    public function ceklogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // cek apakah login valid
        if (Auth::attempt($credentials)) {
            // jika status = active 
            if (Auth::user()->status != 'active') {

                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'gagal');
                Session::flash('message', 'Akun kamu belum aktif coba hubungi admin ! ');
                return redirect('/login');
            }

            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }

            if (Auth::user()->role_id == 2) {
                return redirect('profile');
            }
            // return redirect('');
        }
        Session::flash('status', 'gagal');
        Session::flash('message', 'Login Invalid !');
        return redirect('/login');
    }

    public function cekregister(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users|max:50',
            'password' => 'required|max:50',
            'phone' => 'max:20',
            'address' => 'required|max:255',
        ], [
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username sudah ada !',
            'username.max' => 'Maksimal 50 karakter',
            'password.required' => 'Password wajib diisi !',
            'password.max' => 'Password maximal 50 karakter',
            'phone.max' => 'No Hp maximal 20 karakter',
            'address.required' => 'Alamat wajib diisi !'
        ]);

        $data = [
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address
        ];

        User::create($data);

        return redirect('/login')->with('okin', 'Bikin akun berhasil silahkan hubungi admin untuk konfirmasi');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
