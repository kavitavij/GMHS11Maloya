<?php

namespace App\Livewire\Frontend;
use App\Models\File;

use Livewire\Component;

class EventNews extends Component
{
    public $data;
    public function render()
    {
        $this->data = File::get()->where('type', 3);
        return view('livewire.frontend.event-news');
    }
}
