<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backer extends Model
{
    //
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function donation(){
        return $this->hasMany('App\Donation');
    }
}
