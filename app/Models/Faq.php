<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //
    protected $table = 'faq';
    public $timestamps = false;
    protected $fillable = [ 'question', 'answer', 'page_id', 'developer_id', 'status'];


}
