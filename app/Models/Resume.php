<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Resume extends Model 
{

    protected $table = 'resumes';
    public $timestamps = true;
    protected $fillable = array('profile_id', 'file_path');

    public function profile(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Profile');
    }

    public function applications(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Application');
    }

}