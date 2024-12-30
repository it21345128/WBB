<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{
    protected $table = 'board_members'; // Ensure this matches your table name
    protected $fillable = ['name', 'position', 'email']; // Add the fields you want to be fillable
}
