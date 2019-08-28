<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = 'achievements';
    protected $fillable = ['user_id', 'description', 'status'];



    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
