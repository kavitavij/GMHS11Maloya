<?php

namespace App\Livewire\Frontend;

use App\Models\File;
use Livewire\Component;

class FrontendNavbar extends Component
{
    public $marqueeData;
    public function render()
    {
        return view('livewire.frontend.frontend-navbar');
    }
   public function mount()
   {
    $this->marqueeData= File::where('type', 3)->latest()->first();
   
   }

}
