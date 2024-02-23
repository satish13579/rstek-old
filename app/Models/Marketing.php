<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    protected $table = 'marketing_form';

    protected $fillable = ['form_data'];

    protected $casts = [
        'form_data' => 'array',
    ];
}