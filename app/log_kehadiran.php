<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class log_kehadiran extends Model
{
    protected $table = 'att_log';

    // public function setDateAttribute($value)
    // {
    //   return \Carbon\Carbon::parse($this->atttributes['scan_date'])->format('l, j-F-Y');
    // }
    
}
