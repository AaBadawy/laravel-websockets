<div>
    <div class="card">
        <h5 class="card-header">Chat</h5>
        <div class="card-body">
            @foreach($messages as $message)
                <p class="card-text {{$message->user_type == 'sender' ? 'text-primary' : 'text-danger'}}" >{{$message->body}}</p>
            @endforeach
            <a href="{{route('test-event')}}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
