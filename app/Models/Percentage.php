<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Percentage extends Model
{
    protected $fillable = [
        'hei', 'program', 'percentage', 'semester',
    ];

    protected $primaryKey = "percentageID";
    protected $table = "percentage";
}
