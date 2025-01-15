<?php

namespace App\Livewire\Admins;

use App\Models\Transfer_Certifacate_Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddTransferCategory extends Component
{
    use WithFileUploads;
    public $category_name , $image , $categorydata;
    public function render()
    {
        return view('livewire.admins.add-transfer-category');
    }
    public function mount()
    {
        $this->categorydata= Transfer_Certifacate_Category::get();
    }
    public function save()
    {
        $data = $this->validate([
            'category_name' => 'required',
            'image' => 'required',
        ]);

        $imageName =  $data['image']->getClientOriginalName();    
        $filePath =  $data['image']->storeAs('images', $imageName, 'public');

        $categorys = new Transfer_Certifacate_Category;
        $categorys->category_name = $data['category_name'];
        $categorys->image = $imageName;
        $categorys->save();

        session()->flash('message','Uploaded Successfully!!');
    }
}
