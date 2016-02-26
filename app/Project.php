<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['video_link','title','risk','duration'];

    public function creator(){
        return $this->belongsTo('App\Creator');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
