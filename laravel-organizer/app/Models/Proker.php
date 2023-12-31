<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proker extends Model
{
    use CrudTrait;
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'Proker_name',
        'deskripsi',
        'status',
    ];

    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'groups', 'proker_id', 'user_id')->withPivot('is_leader');
    }

    public function post() : HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function file() : HasMany
    {
        return $this->hasMany(File::class);
    }

    public function isLeaderofGroup($groupid){
        return $this->User()->where('is_leader', true)->exists();
    }
}
