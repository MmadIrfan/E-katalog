<div>
    @foreach ($chats as $chat)
        <div>
            <strong>{{ $chat->name }} ({{ $chat->email }}):</strong>
            <p>{{ $chat->message }}</p>
            <button wire:click="deleteChat({{ $chat->id }})">Delete</button>
        </div>
    @endforeach
</div>
