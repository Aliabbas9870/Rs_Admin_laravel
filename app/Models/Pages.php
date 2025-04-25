<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{

    use HasFactory;
    protected $table="pages";
    public $timestamps = false;

    protected $fillable = [
        'page_type_id', 'developer_id', 'name', 'slug', 'banner_image', 'about_image', 'about_video',
        'phone', 'whatsapp', 'email', 'payment_plan', 'map_pic', 'nearby',
        'community_amnity', 'points', 'contant_info', 'status', 'Fshow'
    ];
}
