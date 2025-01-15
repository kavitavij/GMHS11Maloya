<?php

namespace App\Livewire\Frontend;

use App\Models\SchoolCommitee;
use Livewire\Component;

class Commitee extends Component
{
    public $commiteedata;
    public function render()
    {
        return view('livewire.frontend.commitee');
    }
    public function mount()
    {
        $this->commiteedata = SchoolCommitee::get();
    }
}
