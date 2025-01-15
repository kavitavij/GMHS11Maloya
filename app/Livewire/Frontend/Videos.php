<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\videos as videomodel;


class Videos extends Component
{
    public $videoData;
    public function render()
    {
        return view('livewire.frontend.videos');
    }
    public function mount()
    {
        $this->videoData = videomodel::get();
    }
}
