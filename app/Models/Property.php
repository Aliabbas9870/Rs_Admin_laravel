<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table="properties";
    protected $primaryKey="id";


    protected $fillable = [
        'title', 'developer_id', 'location', 'community',
        'bought_today', 'view_currently', 'booked_meet',
        'detail_list', 'payment_plan', 'aed_price',
        'usd_price', 'gbp_price', 'rooms', 'bathrooms',
        'video_url', 'images', 'community_id', 'status', 'sort_order'
    ];
   //
}
