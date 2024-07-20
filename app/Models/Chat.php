<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['message', 'chat_session_id'];

    public function chatSession()
    {
        return $this->belongsTo(ChatSession::class);
    }
}