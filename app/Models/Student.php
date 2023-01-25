<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Student extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'std_id';
    protected $table = 'students';
}