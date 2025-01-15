<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\File;
use App\Models\Header as ModelsHeader;

class Header extends Component
{
    public $data , $marqueeData; 
    public function render()
    {
        session()->flash('message', 'Uploaded Successfully!!');
        return view('livewire.header');
    }
    public function mount()
    {
        $this->marqueeData= File::where('type', 3)->latest()->first();
        $this->data= ModelsHeader::get();
    }
}
