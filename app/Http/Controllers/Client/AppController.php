<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
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
}
