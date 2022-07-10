<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use HasFactory;
    protected $table = 'medicals';
    protected $fillable = [
        'mat_no',
        'cough',
        'chest_pain',
        'bloody_urine',
        'excess_urine',
        'black_stool',
        'mucus_stool',
        'epilepsy',
        'eye_pain',
        'eye_discharge',
        'ear_pain',
        'ear_discharge',
        'breathing_diff',
        'breathless_walk',
        'groin',
        'nect',
        'tuberculosis',
        'diabetes',
        'mental',
        'hypertension',

        'hospital',
        'hosp_desc',
        'accident',
        'acc_desc',
    ];
}
