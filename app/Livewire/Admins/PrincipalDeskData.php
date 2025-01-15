<?php

namespace App\Livewire\Admins;


use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Contant;


class PrincipalDeskData extends Component
{
    use WithFileUploads;
    public  $image , $heading ,$description , $data ;

    
    public function render()
    {
        $this->data= Contant::get()->where('type', 1);
        return view('livewire.admins.principal-desk-data');
    }

    
    public function store()
    { 
        $data = $this->validate([
            'heading'=> 'required' ,
            'description' => 'required',
            'image' => 'required',
        ]);

        $fileName =  $data['image']->getClientOriginalName();    
        $filePath =  $data['image']->storeAs('images', $fileName, 'public');
      
        $principalDeskData = new Contant();
        $principalDeskData->heading = $data['heading'];
        $principalDeskData->description = $data['description'];
        $principalDeskData->image = $fileName;
        $principalDeskData->type = 1;
        $principalDeskData->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
}
