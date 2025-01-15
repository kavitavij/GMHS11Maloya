<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\SchoolDetail;

class SchoolDetails extends Component
{
    public $school_details;
    public function render()
    {
        $this->school_details= SchoolDetail::get();
        return view('livewire.frontend.school-details');
    }
}
