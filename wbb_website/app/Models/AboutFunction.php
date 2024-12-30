<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutFunction extends Model
{
    protected $table = 'about_functions'; // Ensure this matches your table name
    protected $fillable = ['function_description']; // Add the fields you want to be fillable
}
