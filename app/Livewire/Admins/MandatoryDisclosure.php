<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File;

class MandatoryDisclosure extends Component
{
    use WithFileUploads;
    public $file_name , $file , $data ; 
    public function render()
    {
        $this->data= File::where('type', 1)->get();
        return view('livewire.admins.mandatory-disclosure');
    }
    public function store()
    { 
        $data = $this->validate([
            'file_name' => 'required',
            'file' => 'required',
        ]);

        $fileName =  $data['file']->getClientOriginalName();    
        $filePath =  $data['file']->storeAs('files', $fileName, 'public');
        
        // dd($data['file_name'], $fileName);
      
        $files = new File();
        $files->file_name = $data['file_name'];
        $files->file = $fileName;
        $files->type = 1;
        $files->save();
        session()->flash('message','Uploaded Successfully!!');
        
    }
}
