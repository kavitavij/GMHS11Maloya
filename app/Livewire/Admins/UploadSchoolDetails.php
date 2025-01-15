<?php

namespace App\Livewire\Admins;

use App\Models\SchoolDetail;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class UploadSchoolDetails extends Component
{
    use WithFileUploads;
    public $affiliation_number, $affiliation_validity, $school_code,
        $school_name, $address, $principal_name, $principal_contact_number, $principal_retirement_date,
        $school_contact_number, $school_email, $school_website, $landmark, $estsblishment_year;

    public function render()
    {
        return view('livewire.admins.upload-school-details');
    }

    public function store()
    {
        $schooldata = $this->validate([
            'affiliation_number' => '',
            'affiliation_validity' => '',
            'school_code' => '',
            'school_name' => 'required',
            'address' => 'required',
            'principal_name' => '',
            'principal_contact_number' => '',
            'principal_retirement_date' => '',
            'school_contact_number' => '',
            'school_email' => '',
            'school_website' => '',
            'landmark' => '',
            'estsblishment_year' => '',
        ]);

        $School_Detail = new SchoolDetail();
        $School_Detail->affiliation_number = $schooldata['affiliation_number'] ? $schooldata['affiliation_number'] : null;
        $School_Detail->affiliation_validity = $schooldata['affiliation_validity'] ?  $schooldata['affiliation_validity'] : null;
        $School_Detail->school_code = $schooldata['school_code'] ? $schooldata['school_code'] : null;
        $School_Detail->school_name = $schooldata['school_name'];
        $School_Detail->address = $schooldata['address'];
        $School_Detail->principal_name = $schooldata['principal_name'] ? $schooldata['principal_name'] : null;
        $School_Detail->principal_contact_number = $schooldata['principal_contact_number'] ? $schooldata['principal_contact_number'] : null;
        $School_Detail->principal_retirement_date = $schooldata['principal_retirement_date'] ? $schooldata['principal_retirement_date'] : null;
        $School_Detail->school_contact_number = $schooldata['school_contact_number'] ? $schooldata['school_contact_number'] : null;
        $School_Detail->school_email = $schooldata['school_email'] ? $schooldata['school_email'] : null;
        $School_Detail->school_website = $schooldata['school_website'] ? $schooldata['school_website'] : null;
        $School_Detail->landmark = $schooldata['landmark'] ? $schooldata['landmark'] : null;
        $School_Detail->estsblishment_year = $schooldata['estsblishment_year'] ? $schooldata['estsblishment_year'] : null;
        $School_Detail->save();
        session()->flash('success', 'Uploaded Successfully!!');
    }
}
