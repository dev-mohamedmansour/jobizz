<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JobType extends Model 
{

    protected $table = 'job_typies';
    public $timestamps = true;
    protected $fillable = array('name');

    public function job(): HasOne
	 {
        return $this->hasOne('App\Models\Job');
    }

}