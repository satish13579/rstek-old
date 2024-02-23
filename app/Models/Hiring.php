<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hiring extends Model
{
    protected $table = 'hiring_form';

    protected $fillable = ['form_data'];

    protected $casts = [
        'form_data' => 'array',
    ];
}