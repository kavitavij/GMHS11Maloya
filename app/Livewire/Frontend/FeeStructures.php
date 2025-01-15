<?php

namespace App\Livewire\Frontend;

use App\Models\fee_structures;
use Livewire\Component;

class FeeStructures extends Component
{
    public $feedata;
    public function render()
    {
        return view('livewire.frontend.fee-structures');
    }
    
}
