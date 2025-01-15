<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Contant;
class Home extends Component
{
    public  $data;
    public function render()
    {
        $this->data= Contant::get()->where('type', 3);
        return view('livewire.frontend.home');
    }
}
