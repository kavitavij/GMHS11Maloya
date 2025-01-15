<?php

namespace App\Livewire\Frontend;

use App\Models\Transfer_Certifacate;
use Livewire\Component;
use App\Models\Transfer_Certifacate_Category;

class TransferCertificate extends Component
{
    public $certificatedata ,$transfer_certifacate_categorys_id ;
    public function render()
    {
        return view('livewire.frontend.transfer-certificate');
    }

    public function mount(Transfer_Certifacate_Category $id)
    { 
        $this->certificatedata = Transfer_Certifacate::where('transfer_certifacate_categorys_id', $id['id'])->get();
    }
}
