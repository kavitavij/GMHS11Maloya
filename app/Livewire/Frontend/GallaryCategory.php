<?php

namespace App\Livewire\Frontend;

use App\Models\Image;
use App\Models\Image_Category;
use Livewire\Component;

class GallaryCategory extends Component
{
    public $categorydata, $image;
    public function render()
    {
        return view('livewire.frontend.gallary-category');
    }
    public function mount()
    {
        $this->categorydata= Image_Category::get();  
    }
}
