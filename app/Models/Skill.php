<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['skill'];

    protected $dates = ['deleted_at'];

    use HasFactory;

    public function applicants()
    {
        return $this->belongsToMany(Applicant::class);
    }
}
