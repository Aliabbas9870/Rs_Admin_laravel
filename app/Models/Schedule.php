<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model

{
    /** @use HasFactory<\Database\Factories\EnquiryFactory> */
    use HasFactory;
    protected $table="schedule_call";


}
