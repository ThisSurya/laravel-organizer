<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable =[
        'judul',
        'deskripsi',
        'tag',
        'proker_id',
        'file_id',
        'created_at',
        'updated_at'
    ];  

    
    use HasFactory;

    public function prokers() :BelongsTo
    {
        return $this->belongsTo(Proker::class);
    }
}
