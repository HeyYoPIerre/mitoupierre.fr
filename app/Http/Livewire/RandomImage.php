<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class RandomImage extends Component
{
    public $image;

    public function mount()
    {
        $this->image = Image::inRandomOrder()->first();
    }

    public function render()
    {
        return view('livewire.random-image');
    }

    public function submit()
    {
        $this->image = Image::inRandomOrder()->where('id','!=',$this->image->id)->first();

    }
}
