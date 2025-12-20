<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ground extends Model
{
    protected $table = 'grounds';

    protected $fillable = [
        'ground_name',
        'status_active',
        'hourly_price',
    ];
}
