<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationSuperviseeModel extends Model
{
    use HasFactory;
    protected $table = 'superviseeevaluation';
    protected $primaryKey = 'id';
    protected $fillable = ['StudentID', 'StudentName', 'ProjectTitle', 'StudentCategory', 'TotalEva1','TotalEva3','Comment'];
}
