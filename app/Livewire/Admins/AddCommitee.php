<?php

namespace App\Livewire\Admins;

use App\Models\SchoolCommitee;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCommitee extends Component
{
    use WithFileUploads;
    public $commitee_name , $commiteedata;
    public function render()
    {
        return view('livewire.admins.add-commitee');
    }
    public function mount(){
        $this->commiteedata= SchoolCommitee::get();
    }
    public function store()
    { 
        $data = $this->validate([
            'commitee_name' => 'required',
        ]);
      
        $commitees = new SchoolCommitee();
        $commitees->commitee_name = $data['commitee_name'];
        $commitees->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
}
