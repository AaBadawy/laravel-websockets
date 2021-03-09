<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * @package App\Models
 * @property string body
 * @property object recipient
 * @property object sender
 */
class Message extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'sender_id' , 'recipient_id'];

    protected $appends = ['user_type'];

    public function getUserTypeAttribute()
    {
        return $this['sender_id'] == auth()->id() ? 'sender' : 'recipient';
    }
    public function sender()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function recipient()
    {
        return $this->belongsTo('App\Models\User');
    }
}
