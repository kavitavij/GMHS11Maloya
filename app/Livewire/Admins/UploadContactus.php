<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Contact;

class UploadContactus extends Component
{
    use WithFileUploads;
    public  $address , $phone_number , $email , $map ;
    public function render()
    {
        return view('livewire.admins.upload-contactus');
    }
    public function save()
    { 
        $data = $this->validate([
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'map' => 'required',
        ]);
      
        $contacts = new Contact();
        $contacts->address = $data['address'];
        $contacts->phone_number = $data['phone_number'];
        $contacts->email = $data['email'];
        $contacts->map = $data['map'];
        $contacts->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
}
