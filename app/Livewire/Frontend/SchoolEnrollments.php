<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\About;

class SchoolEnrollments extends Component
{
    public $enrollment;
    public function render()
    {
        $this->enrollment = About::get();
        return view('livewire.frontend.school-enrollments');
    }
}
