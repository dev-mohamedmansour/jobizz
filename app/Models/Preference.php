<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Preference extends Model 
{

    protected $table = 'preferences';
    public $timestamps = true;
    protected $fillable = array('profile_id', 'location_id', 'salary_range', 'job_type_id', 'office');

    public function profile(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Profile');
    }

    public function job_titles(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\JobTitle');
    }

    public function location()
    {
        return $this->hasOne('App\Models\Location');
    }

}