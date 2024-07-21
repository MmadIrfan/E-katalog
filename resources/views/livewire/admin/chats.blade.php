@extends('template.navigasiadmin')
@section('title', 'Chats')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            @livewire('admin.chat-list')
                        </div>
                        <div class="col-md-4">
                            @livewire('admin.chat-user')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
