<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticable
{
	use HasApiTokens;
    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'phone', 'password', 'provider_id', 'provider_name', 'conformed_email', 'pin_code');
    protected $hidden = array('password', 'rememberToken');
	  
	  /**
		* @return HasMany
		*/
	  public function profiles(): HasMany
	  {
        return $this->hasMany('App\Models\Profile');
    }

    public function setting(): HasOne
	 {
        return $this->hasOne('App\Models\Setting');
    }

}