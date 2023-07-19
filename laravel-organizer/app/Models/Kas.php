<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'kas';
    protected $fillable =[
        'jumlah',
    ];
}
