<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class log_kehadiran extends Model
{
    protected $table = 'att_log';
    protected $value = 'att_log.scan_date';

    public function setDateAttribute($value)
    {
      $this->atttributes['date'] = (new carbon($value))->format('d/m/y')
    }
    public function setTimeAttribute($value)
    {
      $this->atttributes['time'] = (new carbon($value))->format('HH:mm:ss')
    }
}
