<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable=[

        'name',
        'description',
        'year_level',
        'semester',
        'number_of_units',
        'user_id',
        'course_id'

    ];




}