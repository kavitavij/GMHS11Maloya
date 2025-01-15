<?php

namespace App\Livewire\Admins;

use App\Models\About;
use Livewire\Component;

class UploadAboutus extends Component
{
    public $header , $description;
    public function render()
    {
        return view('livewire.admins.upload-aboutus');
    }
    public function save()
    { 
        $data = $this->validate([
            'header' => 'required',
            'description' => 'required',
         
        ]);
      
        $abouts = new About;
        $abouts->header = $data['header'];
        $abouts->description = $data['description'];
        $abouts->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
}
