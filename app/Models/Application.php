<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Application extends Model 
{

    protected $table = 'applications';
    public $timestamps = true;
    protected $fillable = array('profile_id', 'resume_id', 'job_id', 'status', 'cover_later', 'cover_path', 'applied_date');

    public function profile(): HasOne
	 {
        return $this->hasOne('App\Models\Profile');
    }

    public function resume(): HasOne
	 {
        return $this->hasOne('App\Models\Resume');
    }

    public function job(): HasOne
	 {
        return $this->hasOne('App\Models\Job');
    }

}