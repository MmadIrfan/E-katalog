<div class="chat-container d-flex flex-column" wire:poll.3s="loadChats">
    @if ($chatSession)
        <div class="chat-header bg-light p-3 border-bottom">
            <h5 class="mb-0">
                <i class="fas fa-user-circle mr-2"></i>
                Chat with {{ $chatSession->name }}
            </h5>
            <small class="text-muted">{{ $chatSession->email }}</small>
        </div>
        <div id="chat-messages" class="chat-messages flex-grow-1 p-3">
            @foreach ($chats as $chat)
                <div wire:key="chat-{{ $chat->id }}"
                    class="message-wrapper {{ $chat->is_admin ? 'admin' : 'user' }} mb-3">
                    <div class="message-content p-3 rounded">
                        <p class="mb-1">{{ $chat->message }}</p>
                        <small class="message-time text-muted">
                            {{ $chat->created_at->setTimezone('Asia/Jakarta')->format('H:i') }} -
                            {{ $chat->is_admin ? 'Admin' : $chatSession->name }}
                        </small>
                    </div>
                </div>
            @endforeach
        </div>
        <form wire:submit.prevent="sendMessage" class="chat-input mt-auto p-3 bg-light border-top">
            <div class="input-group">
                <textarea wire:model="message" class="form-control" placeholder="Type your message..." required rows="2"></textarea>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i> Send
                </button>
            </div>
        </form>
    @else
        <div class="no-chat-selected h-100 d-flex flex-column justify-content-center align-items-center text-muted">
            <i class="fas fa-comments fa-4x mb-3"></i>
            <p class="lead">Select a chat session to start messaging.</p>
        </div>
    @endif
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        const scrollToBottom = () => {
            const chatMessages = document.getElementById('chat-messages');
            chatMessages.scrollTop = chatMessages.scrollHeight;
        };

        Livewire.on('chatUpdated', scrollToBottom);
        scrollToBottom();
    });
</script>
