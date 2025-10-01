<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LombaController extends Controller
{
    public function index()
    {
        $lomba = [
            [
                'nama' => 'Desain Poster',
                'kategori' => 'Seni',
                'deskripsi' => 'Tunjukkan kreativitasmu lewat desain poster digital.',
                'deadline' => '2025-11-01',
                'banner' => 'https://picsum.photos/400/250?random=1'
            ],
            [
                'nama' => 'Debat Bahasa Inggris',
                'kategori' => 'Akademik',
                'deskripsi' => 'Asah kemampuan critical thinking dan public speaking.',
                'deadline' => '2025-11-10',
                'banner' => 'https://picsum.photos/400/250?random=2'
            ],
            [
                'nama' => 'Programming Contest',
                'kategori' => 'Teknologi',
                'deskripsi' => 'Adu skill coding dengan problem solving menantang.',
                'deadline' => '2025-11-20',
                'banner' => 'https://picsum.photos/400/250?random=3'
            ]
        ];

        $kategori = ['Desain', 'Coding', 'Menulis', 'Debat'];
        $deadline = ['Minggu Ini', 'Bulan Ini', 'Mendatang'];
        $tag = ['Nasional', 'Online', 'Tim'];
        return view('index', compact('lomba', 'kategori', 'deadline', 'tag'));

    }
}
