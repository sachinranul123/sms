<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    protected $table = 'sections';
    protected $fillable = [
        'section_id','section_name'
    ];
}
