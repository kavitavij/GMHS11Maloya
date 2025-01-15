<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use Livewire\WithFileUploads;

class AddNavbar extends Component
{
    use WithFileUploads;
    public $name ;
    public function render()
    {
        return view('livewire.admins.add-navbar');
    }

}
