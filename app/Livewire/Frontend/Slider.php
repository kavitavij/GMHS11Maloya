<?php

namespace App\Livewire\Frontend;

use App\Models\SliderDetail;
use Livewire\Component;

class Slider extends Component
{
    public $slider;
    public function render()
    {
        return view('livewire.frontend.slider');
    }
    public function mount()
    { 
        $this->slider = SliderDetail::get();
    }
}
