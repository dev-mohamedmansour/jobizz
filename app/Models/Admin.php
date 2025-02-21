<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Admin extends Model 
{

    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = array('email', 'password', 'role');

    public function company(): HasOne
	 {
        return $this->hasOne('App\Models\Company');
    }

}