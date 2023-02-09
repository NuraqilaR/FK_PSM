<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Students extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'std_id';
    public $timestamps = false;
    protected $table = 'students';
    protected $fillable = ['std_id','title','std_name','std_email','std_hp','course'];
}