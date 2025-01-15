<?php

namespace App\Livewire\Admins;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image_Category;
use App\Models\Image;

class UploadGallery extends Component
{
    use WithFileUploads;
    public $categorydata, $image_categorys_id;
    public $image = [];
    public function render()
    {
        $this->categorydata = Image_Category::get();
        return view('livewire.admins.upload-gallery');
    }
    public function store()
    {
        $imagedata = $this->validate([
            'image_categorys_id' => 'required',
            'image' => 'required',
        ]);

        foreach ($imagedata['image'] as $data) {
            $imageName =   $data->getClientOriginalName();
            $data->storeAs('images', $imageName, 'public'); 
            $categorys = new Image;
            $categorys->image_categorys_id = $imagedata['image_categorys_id'];
            $categorys->image = $imageName;
            $categorys->save();
        }

        session()->flash('message', 'Uploaded Successfully!!');
    }
}
