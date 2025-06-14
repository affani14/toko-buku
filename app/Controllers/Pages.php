<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Neon Jepang | Lampu Neon Berkualitas'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Neon Jepang',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us| Neon Jepang',
            'alamat' => [
                [
                    'tipe'   => 'Rumah',
                    'alamat' => 'Jl. Pasar Krapak ',
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
    public function product()
    {

        $data['product'] = [
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


        $data['title'] = 'Product | Neon Jepang';

        return view('pages/product', $data);
    }


    public function index()
    {
        $data = ['title' => 'My Portofolio'];
        return view('pages/homeporto', $data);
    }

    public function aboutme()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/aboutme',  $data);
    }

    public function contactme()
    {
        $data = [
            'title' => 'Contact Me',
            'alamat' => [
                [
                    'tipe'   => 'Rumah',
                    'alamat' => 'Jl. Pasar Krapak ',
                    'kota'   => 'Jombang'
                ],
            ]
        ];
        return view('pages/contactme', $data);
    }

    public function portofolio()
    {
        $data = [
            'title' => 'My Portofolio'
        ];
        return view('pages/portofolio', $data);
    }
}
