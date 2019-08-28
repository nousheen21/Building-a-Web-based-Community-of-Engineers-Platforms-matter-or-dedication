<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'stories';
    protected $fillable = ['user_id', 'description', 'status'];



    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }







}
