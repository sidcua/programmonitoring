<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'office', 'rate',
    ];

    protected $primaryKey = "feedbackID";
    protected $table = "feedbacks";
}
