<?php

namespace App\Livewire\Frontend;

use App\Models\About;
use Livewire\Component;

class Aboutus extends Component
{
    public $aboutdata;
    public function render()
    {
        $this->aboutdata = About::get();
        return view('livewire.frontend.aboutus');
    }
}
