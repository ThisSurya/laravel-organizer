<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proker extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'Proker_name',
        'status',
    ];

    public function post() : HasMany
    {
        return $this->hasMany(Post::class);
    }
}
