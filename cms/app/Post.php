<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'content', 'image', 'published_at'];

    /**
     * Delete image from storage folder
     * return void
     */
    public function deleteImage()
    {
        Storage::delete($this->image);
    }
}
