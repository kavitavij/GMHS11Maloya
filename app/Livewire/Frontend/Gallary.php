<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Image;
use App\Models\Image_Category;

class Gallary extends Component
{
    public $imagedata ,$image_categorys_id , $categoryData;
    public function render()
    {
        return view('livewire.frontend.gallary');
    }
    public function mount(Image_Category $id)
    { 
        $this->imagedata = Image::where('image_categorys_id', $id['id'])->get();
        $this->categoryData = Image_Category::where('id', $id['id'])->get();
    }
}
