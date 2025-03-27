<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'alamat' => [
                [
                    'tipe'   => 'Rumah',
                    'alamat' => 'Jl. Pasar Krapak no 87',
                    'kota'   => 'Jombang'
                ],
                [
                    'tipe'   => 'Kantor',
                    'alamat' => 'Kompleks PonPes Darul Ulum',
                    'kota'   => 'Jombang'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
