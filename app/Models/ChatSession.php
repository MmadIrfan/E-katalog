<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatSession extends Model
{
    protected $fillable = ['email', 'name'];

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }
}