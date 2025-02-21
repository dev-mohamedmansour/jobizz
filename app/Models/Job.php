<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model 
{

    protected $table = 'jobs';
    public $timestamps = true;
    protected $fillable = array('title', 'company_id', 'location_id', 'category_id', 'jop_type_id', 'salary', 'description', 'requirement', 'experience_level', 'status');

    public function category(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Category');
    }

    public function location(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Location');
    }

    public function company(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Company');
    }

    public function job_type(): BelongsTo
	 {
        return $this->belongsTo('App\Models\JobType');
    }

    public function applications(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Application');
    }

    public function profiles(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Profile');
    }

    public function notifications(): HasMany
	 {
        return $this->hasMany('App\Models\Notification');
    }

}