<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Notification extends Model 
{

    protected $table = 'notifications';
    public $timestamps = true;
    protected $fillable = array('job_id', 'message', 'title');

    public function job(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Job');
    }

    public function profiles(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Profile');
    }

}