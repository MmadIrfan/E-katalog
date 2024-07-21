<div wire:poll.3s="loadChatSessions">
    <h2>Chat Sessions</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Last Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chatSessions as $session)
                <tr>
                    <td>{{ $session->name }}</td>
                    <td>{{ $session->email }}</td>
                    <td>{{ $session->chats->last()->message ?? 'No messages' }}</td>
                    <td>
                        <button wire:click="selectChat({{ $session->id }})" class="btn btn-primary">View</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
