<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class OtherResult extends Component
{
    public function render()
    {
        $results = Auth::user()->results()->get();

        return view('livewire.frontend.user.other-result', [
            'results' => $results
        ])->layout('layouts.frontend', [
            'title' => 'Hasil'
        ]);
    }
}
