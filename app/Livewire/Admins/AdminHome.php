<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Contant;

class AdminHome extends Component
{
    use WithFileUploads;
    public  $image , $heading ,$description , $data;
    public function render()
    {
        $this->data= Contant::get()->where('type', 3);
        return view('livewire.admins.admin-home');
    }
    public function store()
    { 
        $data = $this->validate([
            'heading' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $imageName =  $data['image']->getClientOriginalName();    
        $imagePath =  $data['image']->storeAs('images', $imageName, 'public');
        
        // dd($data['file_name'], $fileName);
      
        $contacts = new Contant();
        $contacts->heading = $data['heading'];
        $contacts->description = $data['description'];
        $contacts->image = $imageName;
        $contacts->type = 3;
        $contacts->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
}
