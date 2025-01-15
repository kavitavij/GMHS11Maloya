<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Contant;
class Facility extends Component
{
    public $facilitydata;
    public function render()
    {
        return view('livewire.frontend.facility');
    }
    public function mount(){
        $this->facilitydata= Contant::get()->where('type', 4);

    }
}
