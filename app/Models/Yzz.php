<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yzz extends Model
{
    protected $fillable = ["name","skill","bio","location_id"];

    /** @use HasFactory<\Database\Factories\YzzFactory> */
    use HasFactory;
    public function location(){
        return $this->belongsTo(Locations::class);
    }


}
