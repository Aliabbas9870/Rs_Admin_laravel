<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table = 'gallery';
    public $timestamps = false;

    protected $fillable = [
        'page_id',
        "image_path",  // ✅ Add this line

    ];
}
