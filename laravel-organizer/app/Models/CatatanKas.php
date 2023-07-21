<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanKas extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $table = 'catatan_kas';
    protected $fillable =[
        'jenis',
        'jumlah',
        'deskripsi',
    ];

    
}
