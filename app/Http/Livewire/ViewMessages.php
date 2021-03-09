<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class ViewMessages extends Component
{
    public $messages = [];

    protected $listeners = ['echo:message,MessageSent' => 'messages'];

    public function mount()
    {
        $this->messages();
    }

    public function messages()
    {
        $this->messages = auth()->user()->messages()->orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.view-messages');
    }
}
