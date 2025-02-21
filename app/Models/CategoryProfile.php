<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProfile extends Model 
{

    protected $table = 'category_profile';
    public $timestamps = true;
    protected $fillable = array('profile_id', 'category_id');

}