<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job_Title_Preferences extends Model 
{

    protected $table = 'job_title_preference';
    public $timestamps = true;
    protected $fillable = array('preference_id', 'job_title_id');

}