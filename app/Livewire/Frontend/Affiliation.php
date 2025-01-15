<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\File;


class Affiliation extends Component
{
    public $affiliationdata;
    public function render()
    {
        return view('livewire.frontend.affiliation');
    }
    public function mount()
    {
        $this->affiliationdata = File::get()->where('type', 2);
    
    }
}
