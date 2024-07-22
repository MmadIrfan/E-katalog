<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\ChatSession;

class ChatList extends Component
{
    public $chatSessions;
    public $activeSessionId;

    protected $listeners = ['refreshChatList'];

    public function mount()
    {
        $this->loadChatSessions();
    }

    public function selectChat($chatSessionId)
    {
        $this->activeSessionId = $chatSessionId;
        $this->dispatch('loadChat', chatSessionId: $chatSessionId);
    }

    public function loadChatSessions()
    {
        $this->chatSessions = ChatSession::latest()->get();
    }

    public function refreshChatList()
    {
        $this->loadChatSessions();
    }

    public function render()
    {
        return view('livewire.admin.chat-list');
    }
}