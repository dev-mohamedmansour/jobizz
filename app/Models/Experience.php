<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model 
{

    protected $table = 'experiences';
    public $timestamps = true;
    protected $fillable = array('profile_id', 'company_name', 'job_title', 'start_date', 'end_date');

    public function profile(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Profile');
    }

}