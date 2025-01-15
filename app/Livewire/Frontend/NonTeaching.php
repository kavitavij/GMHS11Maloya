<?php

namespace App\Livewire\Frontend;

use App\Models\Employee;
use Livewire\Component;

class NonTeaching extends Component
{
    public $nonTeacherdata;
    public function render()
    {
        return view('livewire.frontend.non-teaching');
    }
    public function mount()
    {
        $this->nonTeacherdata = Employee::get();
    }
}
