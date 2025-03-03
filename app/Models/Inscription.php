<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    public function formation(){
        return $this->belongsTo('App\Models\Formation','formation_id');
    }
}
