<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Balance;

class Detail extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
