<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Footer extends Component
{
    public $data;
    public function render()
    {
        $this->data = Contact::get();
        return view('livewire.footer');
    }
}
