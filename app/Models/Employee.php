<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // protected $table = 'Employees';
    // protected $primarykey = "name";
    // protected $timestamps = false;
    // protected $dateTime = 'U';
    protected $fillable = [
        'emp_id','name','excerpt','dob','post','sallary','address','min_to_read','image_path','is_published'
    ];
    
}