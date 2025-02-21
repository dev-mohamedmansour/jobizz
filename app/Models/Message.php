<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model 
{

    protected $table = 'messages';
    public $timestamps = true;
    protected $fillable = array('content', 'sender_id', 'receiver_id', 'read_at');
    protected $visible = array('sender_id');

    public function sender(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Profile', 'sender_id');
    }

    public function receiver(): BelongsTo
	 {
        return $this->belongsTo('App\Models\Profile', 'receiver_id');
    }

}