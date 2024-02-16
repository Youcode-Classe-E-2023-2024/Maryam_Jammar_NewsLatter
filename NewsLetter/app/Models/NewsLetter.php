<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'creator', 'status', 'media'];

    public function media() {
        return $this->belongsToMany(Medias::class, 'media');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator');
    }
}
