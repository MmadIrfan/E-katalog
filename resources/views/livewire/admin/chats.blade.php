@extends('template.navigasiadmin')
@section('title', 'Chats')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 border-right">
                                @livewire('admin.chat-list')
                            </div>
                            <div class="col-md-6">
                                @livewire('admin.chat-user')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
