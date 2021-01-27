<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicEducation extends Model
{
    use HasFactory;


    protected $fillable = [
        'level',
        'country',
        'school',
        'index_no',
        'start_year',
        'end_year',
        'results_system',
        'results_grade'
    ];

}
