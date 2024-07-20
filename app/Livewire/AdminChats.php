<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Chat as ChatModel;

class AdminChats extends Component
{
    public $chats;

    public function mount()
    {
        $this->chats = ChatModel::all();
    }

    public function deleteChat($id)
    {
        ChatModel::find($id)->delete();
        $this->chats = ChatModel::all();
    }

    public function render()
    {
        return view('livewire.admin-chats');
    }
}
