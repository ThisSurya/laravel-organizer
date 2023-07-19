<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use CrudTrait;
    protected $table = 'post';
    protected $fillable =[
        'judul',
        'deskripsi',
        'tag',
        'proker_id',
        'user_id',
        'created_at',
        'updated_at'
    ];  

    
    use HasFactory;

    public function prokers() :BelongsTo
    {
        return $this->belongsTo(Proker::class);
    }
}
