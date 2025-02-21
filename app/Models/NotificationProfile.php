<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationProfile extends Model 
{

    protected $table = 'notification_profile';
    public $timestamps = true;
    protected $fillable = array('notification_id', 'profile_id');

}