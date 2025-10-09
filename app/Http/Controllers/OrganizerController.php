<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function index()
    {
        // Dummy events + sub-lomba
        $events = [
            [
                'id' => 1,
                'title' => 'Pekan Kreativitas Mahasiswa 2025',
                'date_start' => '2025-10-10',
                'date_end' => '2025-10-20',
                'sub' => ['Desain Poster', 'Debat Bahasa Inggris', 'Programming Contest'],
                'status' => 'active'
            ],
            [
                'id' => 2,
                'title' => 'Kompetisi Teknologi Kampus X',
                'date_start' => '2025-11-01',
                'date_end' => '2025-11-05',
                'sub' => ['Hackathon', 'IoT Challenge'],
                'status' => 'draft'
            ]
        ];

        // Dummy peserta per sub-lomba (flat list untuk contoh)
        $participants = [
            ['id'=>1,'name'=>'Alya Putri','institution'=>'Universitas A','email'=>'alya@example.com','phone'=>'081234567890','event_id'=>1,'sub_lomba'=>'Desain Poster','status'=>'pending'],
            ['id'=>2,'name'=>'Rizal Ahmad','institution'=>'Politeknik B','email'=>'rizal@example.com','phone'=>'081298765432','event_id'=>1,'sub_lomba'=>'Programming Contest','status'=>'diterima'],
            ['id'=>3,'name'=>'Siti Nur','institution'=>'SMK C','email'=>'siti@example.com','phone'=>'081212345678','event_id'=>2,'sub_lomba'=>'Hackathon','status'=>'pending'],
            ['id'=>4,'name'=>'Deni Saputra','institution'=>'Universitas A','email'=>'deni@example.com','phone'=>'081223334444','event_id'=>1,'sub_lomba'=>'Debat Bahasa Inggris','status'=>'ditolak'],
        ];

        // Dummy pengumuman
        $announcements = [
            ['id'=>1,'title'=>'Pengumuman Finalis Pekan Kreativitas','body'=>'Finalis diumumkan tanggal 18 Okt. Mohon cek email masing-masing.','date'=>'2025-10-15'],
            ['id'=>2,'title'=>'Perpanjangan Pendaftaran','body'=>'Pendaftaran dipercepat sampai 12 Okt untuk lomba Desain Poster.','date'=>'2025-10-08'],
        ];

        // Dummy hasil & sertifikat (per sub-lomba)
        $results = [
            ['sub_lomba'=>'Desain Poster','winners'=>['Juara 1: Alya Putri','Juara 2: Tim B','Juara 3: Deni Saputra']],
            ['sub_lomba'=>'Programming Contest','winners'=>['Juara 1: Rizal Ahmad','Juara 2: Team Alpha']],
        ];

        return view('organizer.dashboard', compact('events','participants','announcements','results'));
    }
}
