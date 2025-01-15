<?php

namespace App\Livewire\Admins;

use App\Models\Image_Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImageCategory extends Component
{
    use WithFileUploads;
    public $category_name, $image, $data, $Category_data;
    public function render()
    {
        $this->Category_data = Image_Category::get();
        return view('livewire.admins.upload-image-category');
    }

    public function store()
    {
        $data = $this->validate([
            'category_name' => 'required',
            'image' => 'required',
        ]);

        $imageName = $data['image']->getClientOriginalName();
        $filePath = $data['image']->storeAs('images', $imageName, 'public');
        $categorys = new Image_Category;
        $categorys->category_name = $data['category_name'];
        $categorys->image = $imageName;
        $categorys->save();

        session()->flash('message', 'Uploaded Successfully!!');
    }
    public function delete($id)
    {
        Image_Category::find($id)->delete();
        session()->flash('delete', 'Image Category Deleted!');
    }
}
