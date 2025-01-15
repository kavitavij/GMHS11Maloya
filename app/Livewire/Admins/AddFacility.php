<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Contant;
class AddFacility extends Component
{
    use WithFileUploads;
    public  $heading , $description , $image , $facilitydata;
    public function render()
    {

        return view('livewire.admins.add-facility');
    }
    public function mount(){
        $this->facilitydata= Contant::get()->where('type', 4);
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
        $contants->type = 4;
        $contants->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
}
