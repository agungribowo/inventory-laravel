<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialControl extends Model
{
    use HasFactory;

    protected $table = 'materialcontrol';

    protected $fillable = [
        'supplier',
        'drawing',
        'part_name',
        'tanggal',
        'stok',
        'total',
        'created_at',
        'updated_at',
    ];
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
