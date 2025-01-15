<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Contact;

class Contactus extends Component
{
    public $data;
    public function render()
    {
        $this->data = Contact::get();
        return view('livewire.frontend.contactus');
    }
}
