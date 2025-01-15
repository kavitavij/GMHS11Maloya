<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\File;

class Result extends Component
{
    public $Resultdata;
    public function render()
    {
        return view('livewire.frontend.result');
    }
    public function mount()
    {
        $this->Resultdata = File::get()->where('type', 5);
    
    }
}
