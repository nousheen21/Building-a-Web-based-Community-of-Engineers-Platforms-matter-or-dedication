<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';
    protected $fillable = ['user_id', 'description', 'status'];



    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
