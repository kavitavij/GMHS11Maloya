<?php

namespace App\Livewire\Frontend;

use App\Models\File;
use Livewire\Component;

class MandatoryDisclosure extends Component
{
    public $mandatorydata;
    public function render()
    {
        $this->mandatorydata = File::where('type', 1)->get();
        return view('livewire.frontend.mandatory-disclosure');
    }
    public function download(File $id)
    {
        return response()->download(public_path() . '/storage/files/' . $id->file);
    }
}
