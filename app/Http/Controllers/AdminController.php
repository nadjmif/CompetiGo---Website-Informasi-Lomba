<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Data dummy (sementara, nanti bisa ganti ke database)
        $users = [
            ['nama' => 'Andi Pratama', 'role' => 'Organizer', 'status' => 'Aktif'],
            ['nama' => 'Budi Santoso', 'role' => 'Mahasiswa', 'status' => 'Aktif'],
            ['nama' => 'Citra Dewi', 'role' => 'Organizer', 'status' => 'Menunggu Verifikasi'],
        ];

        $events = [
            ['nama' => 'Pekan Kreativitas Mahasiswa', 'status' => 'Aktif', 'organizer' => 'Andi Pratama'],
            ['nama' => 'TechnoFest 2025', 'status' => 'Menunggu Verifikasi', 'organizer' => 'Citra Dewi'],
            ['nama' => 'Lomba Inovasi Nasional', 'status' => 'Selesai', 'organizer' => 'Andi Pratama'],
        ];

        $stats = [
            'total_users' => 245,
            'total_events' => 27,
            'pending_verif' => 3,
        ];

        return view('admin.dashboard', compact('users', 'events', 'stats'));
    }
    public function deactivateUser($id)
    {
        // Contoh logika nonaktif user
        return back()->with('success', "Akun user dengan ID $id berhasil dinonaktifkan!");
    }
}
