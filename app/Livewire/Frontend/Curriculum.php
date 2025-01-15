<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\File;

class Curriculum extends Component
{
    public $CurriculumData;
    public function render()
    {
        return view('livewire.frontend.curriculum');
    }
    public function mount()
    {
        $this->CurriculumData = File::get()->where('type', 2);
    
    }
}
