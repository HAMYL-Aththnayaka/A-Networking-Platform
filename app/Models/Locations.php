<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $fillable =['name','Region','description'];
    /** @use HasFactory<\Database\Factories\LocationsFactory> */
    use HasFactory;
}
