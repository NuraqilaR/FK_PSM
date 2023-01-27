<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationEvaluateeModel extends Model
{
    use HasFactory;
    protected $table = 'evaluateeevaluation';
    protected $primaryKey = 'id';
    protected $fillable = ['StudentID', 'StudentName', 'ProjectTitle', 'StudentCategory', 'TotalEva2','Comment'];
}
