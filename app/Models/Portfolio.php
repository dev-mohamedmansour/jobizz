<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portfolio extends Model 
{

    protected $table = 'portfolios';
    public $timestamps = true;
    protected $fillable = array('profile_id', 'type', 'content', 'image_id');

    public function profile(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Profile');
    }

    public function images(): HasMany
	 {
        return $this->hasMany('App\Models\Image');
    }

}