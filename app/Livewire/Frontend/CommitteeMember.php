<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\SchoolCommitee;
use App\Models\CommiteeMembers;

class CommitteeMember extends Component
{
    public $committeesdata , $committees_id ;

    public function render()
    {
        return view('livewire.frontend.committee-member');
    }
    public function mount(SchoolCommitee $id)
    {  
        $this->committeesdata = CommiteeMembers::where('committees_id', $id['id'])->get();
    }
}
