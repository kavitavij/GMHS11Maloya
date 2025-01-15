<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Contant;
class Infrastucture extends Component
{
    public $data;
    public function render()
    {
        $this->data= Contant::get()->where('type', 2);
        return view('livewire.frontend.infrastucture');
    }
}
