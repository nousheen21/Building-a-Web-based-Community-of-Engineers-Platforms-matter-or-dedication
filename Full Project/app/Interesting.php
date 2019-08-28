<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interesting extends Model
{
    protected $table = 'interestings';
    protected $fillable = ['user_id', 'description', 'status'];



    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
