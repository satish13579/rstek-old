<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = ['name','email','company_name','title','ph_no','interested_services','attachment_links','message'];

    protected $casts = [
    ];
}