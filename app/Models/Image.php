<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Image extends Model 
{

    protected $table = 'images';
    public $timestamps = true;
    protected $fillable = array('file_path');

    public function profile(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Profile');
    }

    public function portfolio(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Portfolio');
    }

    public function category(): HasOne
	 {
        return $this->hasOne('App\Models\Category');
    }

}