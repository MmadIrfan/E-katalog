<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\ChatSession;
use App\Models\Chat;
use Livewire\Attributes\On;

class ChatUser extends Component
{
    public $chatSession;
    public $message = '';
    public $chats;  

    #[On('loadChat')] 
    
    public function loadChat($chatSessionId)
    {
        $this->chatSession = ChatSession::findOrFail($chatSessionId);
        $this->loadChats();
    }

    public function loadChats()
    {
        if ($this->chatSession) {
            $this->chats = $this->chatSession->chats()->orderBy('created_at', 'asc')->get();
            $this->dispatch('chatUpdated');
        }
    }

    public function sendMessage()
    {
        $this->validate([
            'message' => 'required',
        ]);

        Chat::create([
            'chat_session_id' => $this->chatSession->id,
            'message' => $this->message,
            'is_admin' => true,
        ]);

        $this->message = '';
        $this->loadChats();
        $this->dispatch('chatUpdated');
    }

    public function render()
    {
        return view('livewire.admin.chat');
    }
}