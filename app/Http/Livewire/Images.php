<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image;
use Livewire\WithFileUploads;

class Images extends Component
{
    public $images = [];

    use WithFileUploads;
    public function uploadImages(){
        foreach($this->images as $keys=>$image){
            $this->images[$keys] = $image->store('images', 'public');
        }
        $this->images = json_encode($this->images);
        Image::create(['filename'=>$this->images]);
        session()->flash('message', 'Image successfully uploaded!');
        $this->emit('imagesUploaded');
    }

    public function render()
    {
        return view('livewire.images');
    }
}
