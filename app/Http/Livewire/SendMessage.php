<?php

namespace App\Http\Livewire;

use App\Events\MessageSent;
use App\Events\SayHello;
use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class SendMessage extends Component
{
    public $sender ;
    public $body;
    public $recipient;
    public $users ;
    public function mount()
    {
        $this->sender = auth()->id();
        $this->recipient = User::where('id','!=', auth()->id())->first()->id;
        $this->users = User::where('id','!=', auth()->id())->get();
    }

    public function save()
    {
        $message = Message::create([
            'body' => $this->body,
            'recipient_id' => $this->recipient,
            'sender_id' => $this->sender,
        ]);
        event( new MessageSent($message));
    }

    public function render()
    {
        return view('livewire.send-message');
    }
}
