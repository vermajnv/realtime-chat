@extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Chatroom</a><span class="badge badge-light pull-right">@{{userInRoom.length}}</span>
        </nav>
        <div class="row mt-4">
            <div class="col-sm-12">
                <chat-log :messages="messages"></chat-log>
                <chat-composer v-on:messagesent="addMessage"></chat-composer>
            </div>
        </div>
    </div>
@endsection
