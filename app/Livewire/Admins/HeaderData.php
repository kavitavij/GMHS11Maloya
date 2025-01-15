<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use App\Models\Header;
use Livewire\WithFileUploads;

class HeaderData extends Component
{ 
    use WithFileUploads;
    public  $school_name, $school_address , $logo_1 , $logo_2 ;

   
    public function render()
    {
        return view('livewire.admins.header-data');
    }
    public function update()
    { 
        $data = $this->validate([
            'school_name' => 'required',
            'school_address' => 'required',
            'logo_1' => 'required',
            'logo_2' => 'required',
        ]);
        
        $logo_1_Name =  $data['logo_1']->getClientOriginalName();    
        $filePath =  $data['logo_1']->storeAs('images', $logo_1_Name, 'public');

        $logo_2_Name =  $data['logo_2']->getClientOriginalName();    
        $filePath_2 =  $data['logo_2']->storeAs('images', $logo_2_Name, 'public');


        $contacts = Header::find(1);
        
        $contacts->school_name = $data['school_name'];
        $contacts->school_address = $data['school_address'];
        $contacts->logo_1 = $logo_1_Name;
        $contacts->logo_2 = $logo_2_Name;
        $contacts->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
}
