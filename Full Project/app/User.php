<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role', 'nsuid', 'year', 'degree', 'user_name', 'email', 'password', 'first_name', 'last_name','image','booking',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function affiliations(){
        return $this->hasMany('App\Affiliation');
    }

    public function projects(){
        return $this->hasMany('App\ProjectResearch')->where('status', 1);
    }

    public function story(){
        return $this->hasMany('App\Story');
    }
    public function travels(){
        return $this->hasMany('App\Travel');
    }
    public function educations(){
        return $this->hasMany('App\Education');
    }
    public function achievements(){
        return $this->hasMany('App\Achievement');
    }
    public function interestings(){
        return $this->hasMany('App\Interesting');
    }
    public function workshops(){
        return $this->hasMany('App\Workshop');
    }

    public function faqs(){
        return $this->hasMany('App\Faq');
    }

    public function blogs(){
        return $this->hasMany('App\Blog')->where('status', 1);
    }

    public function educationWorks(){
        return $this->hasMany('App\EducationWork');
    }



}
