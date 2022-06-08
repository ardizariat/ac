<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaProduk extends Model
{
    use HasFactory, HasUuid;

    public $incrementing = false;

    protected $table = 'sewa_produk',
        $primaryKey = 'id',
        $keyType = 'string',
        $fillable = [
            'kategori_id',
            'nama',
            'tarif_harian',
            'tarif_mingguan',
            'tarif_bulanan',
            'tarif_tahunan',
        ];
}
