<?php

namespace App\Models;

use App\Traits\AddEdit;
use App\Traits\UploadFile;
use App\Traits\UploadImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    use AddEdit, UploadImage, UploadFile;

    public const ACTIVE = true;

    protected $fillable = [
        'title',
        'file',
        'images',
        'status'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function setGenres($ids)
    {
        if($ids == null) { return; }

        $this->genres()->sync($ids);
    }
}
