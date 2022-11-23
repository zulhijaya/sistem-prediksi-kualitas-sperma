<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Attribute;

class Home extends Component
{
    public function render()
    {
        $attributes = Attribute::select('description', 'unit')->get();

        return view('livewire.frontend.home', [
            'attributes' => $attributes
        ])->layout('layouts.frontend', [
            'title' => 'Home'
        ]);
    }
}
