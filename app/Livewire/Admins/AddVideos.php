<?php

namespace App\Livewire\Admins;

use App\Models\videos;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddVideos extends Component
{
    use WithFileUploads;
    public $video_name;
    public function render()
    {
        return view('livewire.admins.add-videos');
    }
    public function store()
    {
        $data = $this->validate([
            'video_name' => 'required',  
        ]);

        $video =  $data['video_name']->getClientOriginalName();    
        $filePath =  $data['video_name']->storeAs('videos', $video, 'public');

        $sliders = new videos;
        $sliders->video_name = $video;
        $sliders->save();

        session()->flash('message','Uploaded Successfully!!');
    }
}
