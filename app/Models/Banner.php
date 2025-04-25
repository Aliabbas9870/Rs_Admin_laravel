<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table= "banner_slider";

    public $timestamps = false;
    protected $primaryKey= "id";
    protected $fillable = [ 'page_id', "tag_line","	heading","banner_desc",  "banner_image", "status"];
}
