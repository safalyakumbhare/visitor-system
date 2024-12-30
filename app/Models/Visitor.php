<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'contact', 'purpose', 'user_id', 'in_time', 'out_time', 'date_of_visit','status'
    ];
}
