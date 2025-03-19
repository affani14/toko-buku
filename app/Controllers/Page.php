<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tos()
    {
        echo "Halaman Term Of Service";
    }
    public function biodata()
    {
        echo "Nama : Affani Yusuf<br>TTL: Jombang, 14 Januari 2000<br>Alamat: Mojokrapak";
    }
}
