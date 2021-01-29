<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultsSystem extends Model
{
    use HasFactory;
    protected $table = 'results_systems';
    protected $fillable = [
                'results_name'
    ];
}
