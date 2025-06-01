<?php

namespace App\Http\Controllers;

use App\Models\ModelUser;
use Illuminate\Http\Request;

class ControllerUser
{
    //
    public function login()
    {
        // Logic to handle user index
        return view('admin.login');
    }

    public function loginAction(Request $request)
    {
        $user = ModelUser::where('username', $request->username)
            ->where('password', $request->password)
            ->first();

       if ($user) {
            session(['admin_logged_in' => true, 'admin_username' => $user->username]);
            return redirect('/admin/daftarmenu')->with('success', 'Login berhasil! Selamat datang, ' . $user->username . '.');
        } else {
            return back()->with('error', 'Username atau password salah!');
        }
    }

    public function daftarmenu()
    {
        // Logic to handle user index
        return view('admin.daftarmenu');
    }

}
