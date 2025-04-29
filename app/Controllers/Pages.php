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
            'title' => 'About | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us| Unipdu Press',
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
    public function projects()
    {

        $data['projects'] = [
            [
                'name' => 'Proyek A',
                'description' => 'Deskripsi proyek A',
                'status' => 'Ongoing'
            ],
            [
                'name' => 'Proyek B',
                'description' => 'Deskripsi proyek B',
                'status' => 'Completed'
            ],
            [
                'name' => 'Proyek C',
                'description' => 'Deskripsi proyek C',
                'status' => 'Ongoing'
            ]
        ];


        $data['title'] = 'Projects | Unipdu Press';

        return view('pages/projects', $data);
    }
}
