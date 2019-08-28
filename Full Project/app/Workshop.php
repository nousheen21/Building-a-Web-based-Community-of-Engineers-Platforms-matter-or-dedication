<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $table = 'workshops';
    protected $fillable = ['user_id', 'description'];



    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

}
