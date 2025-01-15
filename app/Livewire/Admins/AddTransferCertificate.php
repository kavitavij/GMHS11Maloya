<?php

namespace App\Livewire\Admins;

use App\Models\Transfer_Certifacate;
use App\Models\Transfer_Certifacate_Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddTransferCertificate extends Component
{
    use WithFileUploads;
    public $categorydata, $transfer_certifacate_categorys_id, $admission_number, $student_name,
        $class_last_studied_upto, $certificate_issue_date, $file;

    public function mount()
    {
        $this->categorydata = Transfer_Certifacate_Category::get();
    }
    public function render()
    {
        return view('livewire.admins.add-transfer-certificate');
    }
    public function save()
    {
        $data = $this->validate([
            'transfer_certifacate_categorys_id' => 'required',
            'admission_number' => 'required',
            'student_name' => 'required',
            'class_last_studied_upto' => 'required',
            'certificate_issue_date' => 'required',
            'file' => 'required',
        ]);
        $fileName =  $data['file']->getClientOriginalName();    
        $filePath =  $data['image']->storeAs('files', $fileName, 'public');

        $certificates = new Transfer_Certifacate;
        $certificates->transfer_certifacate_categorys_id = $data['transfer_certifacate_categorys_id'];
        $certificates->admission_number = $data['admission_number'];
        $certificates->student_name = $data['student_name'];
        $certificates->class_last_studied_upto = $data['class_last_studied_upto'];
        $certificates->certificate_issue_date = $data['certificate_issue_date'];
        $certificates->file = $fileName;
        $certificates->save();

        session()->flash('message', 'Uploaded Successfully!!');
    }
}
