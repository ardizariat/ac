<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaProdukDetail extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'sewa_produk_detail',
        $primaryKey = 'id',
        $keyType = 'string',
        $fillable = [
            'sewa_produk_id',
            'foto',
            'spesifikasi',
            'kegunaan',
            'fasilitas',
            'keterangan',
        ];
}
