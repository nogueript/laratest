@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Chat</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    .list-group{
        overflow-y: scroll;
        height: 200px;
      }
    </style>
</head>

<body>
  <div class="container">
    <div class="row" id="chat">
      <div class="offset-4 col-4">
        <li class="list-group-item active">Messenger</li>
        <ul class="list-group" v-chat-scroll>
          <message v-for="value in chat.message" :key="value.index" color='warning'>
            @{{ value }}
          </message>
	</ul>
          <input type="text" class="form-control" placeholder="Type your message here..." v-model="message" @keyup.enter="send">
      </div>
    </div>
  </div>
</body>

</html>

@endsection
