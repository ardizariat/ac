<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Http;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function beranda()
    {
        return view('client.beranda');
    }

    public function kontak()
    {
        $title = 'Kontak';
        return view('client.kontak', compact('title'));
    }

    public function layanan()
    {
        $title = 'Layanan Kami';
        return view('client.layanan', compact('title'));
    }

    public function layananAcStanding()
    {
        $title = 'AC Standing';
        return view('client.layananDetail.acStanding', compact('title'));
    }
}
