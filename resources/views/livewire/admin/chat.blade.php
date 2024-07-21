<div wire:poll.3s="loadChats">
    @if ($chatSession)
        <h2>Chat with {{ $chatSession->name }}</h2>
        <div id="chat-messages" class="mb-4" style="max-height: 400px; overflow-y: auto;">
            @foreach ($chats as $chat)
                <div class="{{ $chat->is_admin ? 'admin bg-light' : 'user bg-info' }} p-2 mb-2 rounded">
                    <strong>{{ $chat->is_admin ? 'Admin' : $chatSession->name }}:</strong>
                    {{ $chat->message }}
                </div>
            @endforeach
        </div>
        <form wire:submit.prevent="sendMessage">
            <div class="form-group">
                <textarea wire:model="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    @else
        <p>Select a chat session to start messaging.</p>
    @endif
</div>
<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.on('chatUpdated', () => {
            const chatMessages = document.getElementById('chat-messages');
            chatMessages.scrollTop = chatMessages.scrollHeight;
        });
    });
</script>
