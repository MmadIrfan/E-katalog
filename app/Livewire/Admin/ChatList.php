<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\ChatSession;

class ChatList extends Component
{
    public $chatSessions;
    public $activeSessionId;
    public $lastRefreshTime;

    public function mount()
    {
        $this->lastRefreshTime = now();
        $this->loadChatSessions();
    }

    public function loadChatSessions()
    {
        $this->chatSessions = ChatSession::with(['chats' => function ($query) {
            $query->latest()->limit(1);
        }])
        ->orderByDesc(function ($query) {
            $query->select('created_at')
                ->from('chats')
                ->whereColumn('chat_session_id', 'chat_sessions.id')
                ->latest()
                ->limit(1);
        })
        ->get();
    }

    public function selectChat($chatSessionId)
    {
        $this->activeSessionId = $chatSessionId;
        $this->dispatch('loadChat', chatSessionId: $chatSessionId);
    }
    
    public function refreshChatList()
    {
        $this->loadChatSessions();
        $this->lastRefreshTime = now();
    }

    public function render()
    {
        return view('livewire.admin.chat-list');
    }
}