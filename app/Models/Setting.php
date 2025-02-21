<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Setting extends Model 
{

    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('user_id', 'about_app');

    public function user(): BelongsTo
	 {
        return $this->belongsTo('App\Models\User');
    }

}