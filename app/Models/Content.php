<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $table = 'content';
    // public $timestamps = false;
    // protected $fillable = [ 'page_id', "developer_id","img1","title","'status'"];
    protected $fillable = [
        'page_id',
        'page_type_id',
        'title',
        'meta',
        'h1',
        'h2',
        'h3',
        'h4',
        'h5',
        'h6',
        'para1',
        'para2',
        'created_at',
        'updated_at',
        'updated_by',
        'status',
    ];
    protected $primaryKey = 'id';
}
