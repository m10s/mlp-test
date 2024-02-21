<?php

namespace App\Livewire;

use Livewire\Component;

use Spatie\MediaLibraryPro\Livewire\Concerns\WithMedia;

class MyForm extends Component
{
    use WithMedia;

    public $images = [];

    public function render()
    {
        return view('livewire.my-form');
    }
}
