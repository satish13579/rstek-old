<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
        'vacancy',
        'job_tenure',
        'experience',
        'location',
        'domain',
        'mandatory_skills',
        'skills',
        'roles_responsibilities',
        'key_skills',
        'job_type',
        'is_published',
        'created_at',
        'published_at',
    ];
}