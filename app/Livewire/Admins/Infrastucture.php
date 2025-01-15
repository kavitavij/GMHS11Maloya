<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Contant;

class Infrastucture extends Component
{
    use WithFileUploads;
    public  $heading , $description , $image , $data;
    public function render()
    {
        $this->data= Contant::get()->where('type', 2);
        return view('livewire.admins.infrastucture');
    }
    
    public function store()
    { 
        $data = $this->validate([
            'heading' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $imageName =  $data['image']->getClientOriginalName();    
        $filePath =  $data['image']->storeAs('images', $imageName, 'public');
      
        $contants = new Contant();
        $contants->heading = $data['heading'];
        $contants->description = $data['description'];
        $contants->image = $imageName;
        $contants->type = 2;
        $contants->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
}
