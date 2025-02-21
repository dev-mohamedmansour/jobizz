<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name');

    public function image(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Image');
    }

    public function jobs(): HasMany
	 {
        return $this->hasMany('App\Models\Job');
    }

    public function profiles(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Profile');
    }

}