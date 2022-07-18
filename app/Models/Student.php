<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = [
        'mat_no',
        'surname',
        'firstname',
        'othername',
        'dob',
        'phone',
        'email',
        'department_id',
        'school_id',
        'course_id',
        'level_id',
        'qr_hash',
        'passport',
    ];
    
}
