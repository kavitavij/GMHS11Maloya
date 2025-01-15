<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Contant;

class PrincipalDesk extends Component
{
    public $Principaldata;
    public function render()
    {
        return view('livewire.frontend.principal-desk');
    }
    public function mount(){
        $this->Principaldata= Contant::get()->where('type', 1);
    }
}
