<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutVisionMission extends Model
{
    protected $table = 'about_vision_mission'; // Ensure this matches your table name
    protected $fillable = ['vision', 'mission']; // Add the fields you want to be fillable
}
