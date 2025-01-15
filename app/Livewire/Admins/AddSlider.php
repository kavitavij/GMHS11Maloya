<?php

namespace App\Livewire\Admins;

use App\Models\SliderDetail;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddSlider extends Component
{
    use WithFileUploads;
    public $data , $slider_image  ;
    public function render()
    {
        return view('livewire.admins.add-slider');
    }
    public function store()
    {
        $data = $this->validate([
            'slider_image' => 'required',  
        ]);

        $imageName =  $data['slider_image']->getClientOriginalName();    
        $filePath =  $data['slider_image']->storeAs('images', $imageName, 'public');

        $sliders = new SliderDetail ;
        $sliders->slider_image = $imageName;
        $sliders->save();

        session()->flash('message','Uploaded Successfully!!');
    }
}
