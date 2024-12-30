<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    protected $table = 'about_page'; // Ensure this matches your table name
    protected $fillable = ['content', 'image']; // Add the fields you want to be fillable
}
