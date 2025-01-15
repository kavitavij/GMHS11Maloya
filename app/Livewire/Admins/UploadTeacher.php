<?php

namespace App\Livewire\Admins;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadTeacher extends Component
{
    use WithFileUploads;
    public $teacher_name, $designation , $qualification , $assign_class , $assign_subject , $teacherdata;
    public function render()
    {
        $this->teacherdata = Teacher::get();
        return view('livewire.admins.upload-teacher');
    }

    public function save()
    { 
        $data = $this->validate([
            'teacher_name' => 'required',
            'designation' => 'required',
            'qualification' => 'required',
            'assign_class' => 'required',
            'assign_subject' => 'required',
        ]);
      
        $contacts = new Teacher();
        $contacts->teacher_name = $data['teacher_name'];
        $contacts->designation = $data['designation'];
        $contacts->qualification = $data['qualification'];
        $contacts->assign_class = $data['assign_class'];
        $contacts->assign_subject = $data['assign_subject'];
        $contacts->save();

        session()->flash('message','Uploaded Successfully!!');
        
    }
}
