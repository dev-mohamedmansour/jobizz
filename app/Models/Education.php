<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model 
{

    protected $table = 'educations';
    public $timestamps = true;
    protected $fillable = array('school_name', 'degree', 'study_field', 'start_date', 'end_date', 'profile_id');

    public function profile(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Profile');
    }

}