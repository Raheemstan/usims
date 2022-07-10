<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    protected $table = 'labs';
    protected $fillable = [
        'mat_no',
        'weight',
        'height',
        'eye_vision',
        'blood_press',
        'hb',
        'pc',
        'genotype',
        'hiv',
        'wbc',
        'urine_microscopy',
        'urinalysis',
        'stool_microscopy',
        'kin_snip',
        'pregnancy',
        'recomendation',
        'officer',
    ];
}