<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    // Editable colums
    protected $fillable = [
        'institution_name',
        'start_date',
        'end_date',
        'current_status',
        'course_focus'
    ]
}
