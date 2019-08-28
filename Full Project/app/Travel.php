<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travels';
    protected $fillable = ['user_id', 'description', 'status'];



    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }


}
