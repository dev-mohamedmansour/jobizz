<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model 
{

    protected $table = 'countries';
    public $timestamps = true;
    protected $fillable = array('id', 'name');

    public function locations(): HasMany
	 {
        return $this->hasMany('App\Models\Location');
    }

}