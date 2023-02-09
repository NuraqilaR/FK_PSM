<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    use HasFactory;
    protected $table = 'rubric';
    protected $primaryKey = 'Rubric_id' ;
    protected $fillable = ['Competency',
                            'Excellent_grade',
                            'Good_grade',
                            'Moderate_grade',
                            'Weak_grade',
                            'VWweak_grade',
                            'Fail_grade',
                            'Weightage',
                            'Mark_given',
                            'Final_percent'];
}
