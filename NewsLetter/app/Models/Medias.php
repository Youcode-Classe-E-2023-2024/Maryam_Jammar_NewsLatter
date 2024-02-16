<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Medias extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'user_id'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images');
    }
}
