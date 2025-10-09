<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    // 🔹 Validasi form input dulu
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
    ], [
        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'password.required' => 'Password wajib diisi.',
        'password.min' => 'Password minimal 8 karakter.',
    ]);

    $email = $request->email;
    $password = $request->password;

    // 🔹 Dummy data untuk testing
    $users = [
        'admin' => [
            'email' => 'admin@gmail.com',
            'password' => 'admin123456',
            'role' => 'admin',
        ],
        'organizer' => [
            'email' => 'org@gmail.com',
            'password' => 'org123456',
            'role' => 'organizer',
        ],
        'mahasiswa' => [
            'email' => 'mahasiswa@gmail.com',
            'password' => 'mhs123456',
            'role' => 'mahasiswa',
        ],
    ];

    foreach ($users as $user) {
        if ($email === $user['email'] && $password === $user['password']) {
            session(['role' => $user['role'], 'email' => $email]);

            if ($user['role'] === 'mahasiswa') {
                return redirect()->route('dashboard.mahasiswa')->with('success', 'Login berhasil sebagai Mahasiswa!');
            } elseif ($user['role'] === 'organizer') {
                return redirect()->route('dashboard.organizer')->with('success', 'Login berhasil sebagai Organizer!');
            } else {
                return redirect()->route('dashboard.admin')->with('success', 'Login berhasil sebagai Admin!');
            }
        }
    }

    // 🔹 Kalau salah email/password
    return back()->with('error', 'Email atau password salah!')->withInput();
}

}
