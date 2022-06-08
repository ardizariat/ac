<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'kategori',
        $primaryKey = 'id',
        $keyType = 'string',
        $fillable = [
            'parent_id',
            'nama',
            'kategori',
            'slug',
            'status',
        ];
}
