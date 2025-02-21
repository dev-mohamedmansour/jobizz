<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Profile extends Model 
{

    protected $table = 'profiles';
    public $timestamps = true;
    protected $fillable = array('user_id', 'image_id', 'job_title');

    public function user(): BelongsTo
	 {
        return $this->belongsTo('App\Models\User');
    }

    public function educations(): HasMany
	 {
        return $this->hasMany('App\Models\Education');
    }

    public function experiences(): HasMany
	 {
        return $this->hasMany('App\Models\Experience');
    }

    public function resumes(): HasMany
	 {
        return $this->hasMany('App\Models\Resume');
    }

    public function image(): HasOne
	 {
        return $this->hasOne('App\Models\Image');
    }

    public function portfolio(): HasOne
	 {
        return $this->hasOne('App\Models\Portfolio');
    }

    public function applications(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Application');
    }

    public function preference(): HasOne
	 {
        return $this->hasOne('App\Models\Preference');
    }

    public function jobs(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Job');
    }

    public function categories(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Category');
    }

    public function notifications(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Notification');
    }

    public function sentMessages(): HasMany
	 {
        return $this->hasMany('App\Models\Message', 'sender_id');
    }

    public function receivedMessages(): HasMany
	 {
        return $this->hasMany('App\Models\Message', 'receiver_id');
    }

    public function companies(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Company');
    }

}