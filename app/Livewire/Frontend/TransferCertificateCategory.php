<?php

namespace App\Livewire\Frontend;

use App\Models\Transfer_Certifacate_Category;
use Livewire\Component;

class TransferCertificateCategory extends Component
{
    public $categorydata;
    public function render()
    {
        return view('livewire.frontend.transfer-certificate-category');
    }
    public function mount()
    {
        $this->categorydata= Transfer_Certifacate_Category::get();  
    }
}
