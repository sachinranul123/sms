<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    protected $fillable = [
        'name','student_id','student_fname','student_mname','student_lname','student_grade'
    ];
}
