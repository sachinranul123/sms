<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table='class';
    protected $fillable = ['id', 'class_id','class_name','class_date','class_fee','start_time','end_time','hall_charge'];
}
