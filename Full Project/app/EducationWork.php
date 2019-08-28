<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationWork extends Model
{
    protected $guarded = [];
    protected $table = 'education_works';

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

}
