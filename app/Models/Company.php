<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model 
{

    protected $table = 'companies';
    public $timestamps = true;
    protected $fillable = array('name', 'location_id', 'admin_id', 'web_link', 'image_path', 'about_company');

    public function jobs(): HasMany
	 {
        return $this->hasMany('App\Models\Job');
    }

    public function location(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Location');
    }

    public function admin(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Admin');
    }

    public function profiles(): BelongsToMany
	 {
        return $this->belongsToMany('App\Models\Profile');
    }

}