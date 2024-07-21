<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ChatSession;

class Chat extends Component
{
    public $name;
    public $email;
    public $message;
    public $chats;
    public $showChatForm = false;
    public $showLiveChat = false;
    public $chatSession;

    public function mount()
    {
        $this->chats = collect();
    }

    public function loadChats()
    {
        if ($this->chatSession) {
            $this->chats = $this->chatSession->chats()->orderBy('created_at', 'asc')->get();
        }
    }

    public function toggleChatForm()
    {
        $this->showChatForm = !$this->showChatForm;
        $this->showLiveChat = false;
    }

    public function updatedEmail()
    {
        $this->chatSession = ChatSession::firstWhere('email', $this->email);
        if ($this->chatSession) {
            $this->name = $this->chatSession->name;
            $this->chats = $this->chatSession->chats()->orderBy('created_at')->get();
            $this->showChatForm = false;
            $this->showLiveChat = true;
        } else {
            $this->reset(['chats']);
            $this->showChatForm = true;
            $this->showLiveChat = false;
        }
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if (!$this->chatSession) {
            $this->chatSession = ChatSession::create([
                'email' => $this->email,
                'name' => $this->name,
            ]);
        }

        $chat = $this->chatSession->chats()->create([
            'message' => $this->message,
        ]);

        if ($this->chats === null) {
            $this->chats = collect();
        }
        $this->chats->push($chat);
        $this->reset('message');
        $this->showChatForm = false;
        $this->showLiveChat = true;

        $this->dispatch('chatSent');
    }

    public function render()
    {
        return view('livewire.chat');
    }
}

// <?php

// namespace App\Livewire;

// use Livewire\Component;
// use App\Models\Chat as ChatModel;

// class Chat extends Component
// {
//     public $name;
//     public $email;
//     public $message;
//     public $chats;
//     public $showChatForm = false;
//     public $showLiveChat = false;

//     public function mount()
//     {
//         $this->chats = ChatModel::orderBy('created_at', 'desc')->take(50)->get()->reverse();
//     }

//     public function toggleChatForm()
//     {
//         $this->showChatForm = !$this->showChatForm;
//         $this->showLiveChat = false;
//     }

//     public function submit()
//     {
//         $this->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|email|max:255',
//             'message' => 'required|string',
//         ]);

//         $chat = ChatModel::create([
//             'name' => $this->name,
//             'email' => $this->email,
//             'message' => $this->message,
//         ]);

//         $this->reset('message');
//         $this->chats->push($chat);

//         $this->showChatForm = false;
//         $this->showLiveChat = true;

//         $this->dispatch('chatSent');
//     }

//     public function render()
//     {
//         return view('livewire.chat');
//     }
// }