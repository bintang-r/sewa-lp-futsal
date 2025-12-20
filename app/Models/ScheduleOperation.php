<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleOperation extends Model
{
    protected $table = 'schedule_operations';

    protected $fillable = [
        'time',
        'status_active'
    ];
}
