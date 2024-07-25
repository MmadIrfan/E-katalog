<div wire:poll.5s="refreshChatList" class="chat-list-container">
    <div class="list-group chat-sessions-list">
        @forelse ($chatSessions as $session)
            <a href="#" wire:click.prevent="selectChat({{ $session->id }})"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ $activeSessionId == $session->id ? 'active' : '' }}">
                <div class="flex-grow-1 mr-3">
                    <h6 class="mb-1">{{ $session->name }}</h6>
                    <small class="text-muted">{{ $session->email }}</small>
                    <p class="mb-1 text-truncate">
                        {{ $session->chats->last()->message ?? 'No messages' }}
                    </p>
                </div>
                <span class="badge bg-primary rounded-pill ml-auto">
                    {{ $session->created_at->setTimezone('Asia/Jakarta')->format('H:i') }}
                </span>
            </a>
        @empty
            <div class="h-100 d-flex flex-column justify-content-center align-items-center text-muted text-muted py-3">
                <i class="fas fa-comments fa-3x mb-3"></i>
                <p>No active chat sessions</p>
            </div>
        @endforelse
    </div>
</div>
