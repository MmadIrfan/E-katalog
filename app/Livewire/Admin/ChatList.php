<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\ChatSession;

class ChatList extends Component
{
    public $chatSessions;

    public function mount()
    {
        $this->loadChatSessions();
    }

    public function selectChat($chatSessionId)
    {
        $this->dispatch('loadChat', chatSessionId: $chatSessionId);
    }

    public function loadChatSessions()
    {
        $this->chatSessions = ChatSession::latest()->get();
    }

    public function render()
    {
        // dd($this->chatSessions); // Hapus ini setelah debugging selesai
        return view('livewire.admin.chat-list');
    }
}