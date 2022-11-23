<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\Result as UserResult;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Result extends Component
{   
    public UserResult $result;

    public function render()
    {   
        return view('livewire.frontend.user.result')->layout('layouts.frontend', [
            'title' => 'Prediksi Terbaru'
        ]);
    }
}
