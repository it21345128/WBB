<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stakeholder extends Model
{
    protected $table = 'stakeholders'; // Ensure this matches your table name
    protected $fillable = ['name', 'organization', 'contact']; // Add the fields you want to be fillable
}
