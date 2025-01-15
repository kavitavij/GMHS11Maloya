<?php

namespace App\Livewire\Frontend;

use App\Models\Teacher as ModelsTeacher;
use Livewire\Component;


class Teacher extends Component
{
    public $teacherdata;
    public function render()
    {
        $this->teacherdata = ModelsTeacher::get();
        return view('livewire.frontend.teacher');
    }
}
