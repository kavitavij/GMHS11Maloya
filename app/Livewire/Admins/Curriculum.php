<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File;
class Curriculum extends Component
{
    use WithFileUploads;

    public $file_name , $file , $data; 
    public function render()
    {
        $this->data= File::get()->where('type', 4);
        return view('livewire.admins.curriculum');
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
        $files->type = 4;
        $files->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
}
