<?php

namespace App\Livewire\Admins;

use App\Models\CommiteeMembers;
use App\Models\SchoolCommitee;
use Livewire\Component;
use Livewire\WithFileUploads;


class AddCommitteeMembers extends Component
{
    use WithFileUploads;

    public $committees_id , $member_name ,$designation , $phone_number , $commiteedata;
    public function render()
    {
        return view('livewire.admins.add-committee-members');
    }
    public function save()
    { 
        $data = $this->validate([
            'committees_id' => 'required',
            'mamber_name' => 'required',
            'designation' => 'required',
            'phone_number' => 'required',
        ]);
      
        $commitees = new CommiteeMembers();
        $commitees->committees_id = $data['committees_id'];
        $commitees->mamber_name = $data['mamber_name'];
        $commitees->designation = $data['designation'];
        $commitees->phone_number = $data['phone_number'];
        $commitees->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
    public function mount(){
        $this->commiteedata= SchoolCommitee::get();

    }
}
