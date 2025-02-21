<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JobTitle extends Model 
{

    protected $table = 'job_titles';
    public $timestamps = true;
    protected $fillable = array('name');

    public function preferences(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Preference');
    }

}