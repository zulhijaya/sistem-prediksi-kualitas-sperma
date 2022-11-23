<?php

namespace App\Http\Livewire\Backend\Result;

use App\Models\Result;
use Livewire\Component;

class Show extends Component
{
    public Result $result;

    public function render()
    {
        return view('livewire.backend.result.show')->layout('layouts.backend', [
            'titles' => ['Detail Hasil Prediksi'],
            'create_link' => ''
        ]);
    }
}
