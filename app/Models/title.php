<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class title extends Model
{
    use HasFactory;
    protected $table = 'title';
    protected $primaryKey = "Reg_id" ;
    protected $fillable = ['Stu_SVName', 'Stu_Title', 'Stu_Objective', 'Stu_Scope', 'Stu_ProbStat', 'Stu_SoftUse', 'Stu_ToolsUse', 'Stu_Approach', 'Stu_Status'];
}
