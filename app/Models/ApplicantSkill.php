<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantSkill extends Model
{
    protected $table = 'applicant_skill';

    protected $dates = ['deleted_at'];

    use HasFactory;
}
