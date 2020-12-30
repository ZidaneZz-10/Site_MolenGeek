<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demandePc extends Model
{
    use HasFactory;
    public function pc(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
