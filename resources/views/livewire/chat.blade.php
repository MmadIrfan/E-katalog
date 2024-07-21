<div>
    <button id="contact-toggle" wire:click="toggleChatForm" class="btn">
        <i class="fa-solid fa-headset"></i> Contact Us
    </button>

    <div id="contact-box" class="{{ $showChatForm ? '' : 'hidden' }}">
        <header>Contact Us</header>
        <div class="form">
            <div class="input-box">
                <input type="text" wire:model.defer="name" placeholder="Your Name" class="form-control">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-box">
                <input type="email" wire:model.defer="email" placeholder="Your Email" class="form-control">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-box">
                <textarea wire:model.defer="message" rows="5" placeholder="Your Message" class="form-control"></textarea>
                @error('message')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="submit-box">
                <button wire:click="submit">Send Message</button>
            </div>
        </div>
    </div>

    @if ($showLiveChat)
        <div id="live-chat-box" wire:poll.3s="loadChats">
            <header>Live Chat</header>
            <div class="chat-messages">
                @foreach ($chats as $chat)
                    <div class="{{ $chat->is_admin ? 'admin' : 'user' }} p-2 mb-2 rounded">
                        <strong>{{ $chat->is_admin ? 'Admin' : $chatSession->name }}:</strong>
                        {{ $chat->message }}
                    </div>
                @endforeach
            </div>
            <div class="chat-input">
                <input type="text" wire:model="message" wire:keydown.enter="submit" placeholder="Type a message...">
                <button wire:click="submit">Send</button>
            </div>
        </div>
    @endif
</div>
<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.on('chatSent', () => {
            const chatMessages = document.querySelector('.chat-messages');
            if (chatMessages) {
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        });
    });
</script>
