<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class Select2 extends Component
{

    public $selectedMovie = null;

    public $movies = [];

    public $show = false;

    public function mount()
    {
        $this->movies = Movie::all();
    }

    public function updated($field, $value)
    {
        $this->selectedMovie = Movie::where('id', $value)->first();
    }

    public function showMovie()
    {
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.select2');
    }
}
