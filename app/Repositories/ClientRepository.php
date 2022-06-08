<?php

namespace App\Repositories;

use App\Repositories\Interface\ClientInterface;
use DB;

class ClientRepository implements ClientInterface
{
    public function daftarLayanan()
    {
        return DB::table('sewa_produk as sp')
            ->selectRaw('
        sp.id, sp.nama, k.kategori, sp.kategori_id
        ')
            ->join('kategori as k', 'k.id', '=', 'sp.kategori_id')
            ->where('k.kategori', 'ac standing')
            ->orWhere('k.kategori', 'misty fan')
            ->orderBy('sp.nama')
            ->get();
    }
}
