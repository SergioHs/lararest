<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = ['nome', 'email', 'idade', 'linkedin'];

    protected $dates = ['deleted_at'];

    use HasFactory;
}
