<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model 
{

    protected $table = 'locations';
    public $timestamps = true;
    protected $fillable = array('city');

    public function country(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Country');
    }

    public function jobs(): HasMany
	 {
        return $this->hasMany('App\Models\Job');
    }

    public function companies(): HasMany
	 {
        return $this->hasMany('App\Models\Company');
    }

    public function preferences(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Preference');
    }

}