<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'soil_moisture',
        'relative_humidity',
        'temperature_in_degrees_centigrade',
        'temperature_in_degrees_fahrenheit',
        'timestamp',
    ];
}
