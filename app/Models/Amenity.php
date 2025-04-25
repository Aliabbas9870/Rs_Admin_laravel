<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    //
    protected $table = 'ammenities';
    public $timestamps = false;
    protected $fillable = [ 'page_id', "developer_id","img1","title","'status'"];

    protected $primaryKey = 'id';
}
