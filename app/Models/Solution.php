<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $table = 'solution_form';

    protected $fillable = ['name','email','company_name','title','ph_no','selected_services','project_description','estimated_timeline','company_size','additional_comments'];

    protected $casts = [
    ];
}