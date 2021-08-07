<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home |Latihan Codeigniter 4',
            'nama' => "Muhammad Anas Ma'ruf"
        ];
        return view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me |Latihan Codeigniter 4',
            'profile' => [
                'nama' => "Muhammad Anas Ma'ruf",
                'pekerjaan' => 'Programmer',
                'umur' => '20'
            ]
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact |Latihan Codeigniter 4',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'jl. wahid hasim no.14',
                    'kota' => 'Jepara'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'jl. Ahmad Yani no.150',
                    'kota' => 'Jakarta'
                ],
                [
                    'tipe' => 'Apartment',
                    'alamat' => 'jl. Airlangga No.170',
                    'kota' => 'Semarang'
                ],
            ]
        ];
        return view('pages/contact', $data);
    }
}
