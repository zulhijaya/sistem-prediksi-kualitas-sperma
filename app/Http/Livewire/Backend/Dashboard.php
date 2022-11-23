<?php

namespace App\Http\Livewire\Backend;

use App\Models\User;
use App\Models\Result;
use App\Models\Dataset;
use Livewire\Component;
use App\Models\Criteria;
use App\Models\Attribute;

class Dashboard extends Component
{
    public function render()
    {
        $attribute_count = Attribute::get()->count();
        $criteria_count = Criteria::get()->count();
        $dataset = Dataset::get();
        $user_count = User::get()->count();
        $result_count = Result::get()->count();

        $users = User::where('role', 'user')->orderBy('id', 'DESC')->limit(10)->get();
        $results = Result::with('user')->orderBy('id', 'DESC')->limit(10)->get();
        
        return view('livewire.backend.dashboard', [
            'attribute_count' => $attribute_count,
            'criteria_count' => $criteria_count,
            'dataset' => $dataset,
            'user_count' => $user_count,
            'result_count' => $result_count,
            'users' => $users,
            'results' => $results
        ])->layout('layouts.backend', [
            'titles' => [],
            'create_link' => ''
        ]);
    }
}
