<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobProfile extends Model 
{

    protected $table = 'job_profile';
    public $timestamps = true;
    protected $fillable = array('profile_id', 'job_id');

}