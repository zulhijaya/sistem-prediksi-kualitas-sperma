<?php

namespace App\Http\Livewire\Backend\Attribute;

use App\Models\Dataset;
use Livewire\Component;
use App\Models\Attribute;

class Index extends Component
{
    public function render()
    {
        $attributes = Attribute::withCount(['criterias' => function($query) {
            $query->has('datasets');
        }])->get();
        
        return view('livewire.backend.attribute.index', [
            'attributes' => $attributes
        ])->layout('layouts.backend', [
            'titles' => ['Attribute'],
            'create_link' => 'attribute'
        ]);
    }

    public function delete(Attribute $attribute)
    {
        $attribute->criterias()->delete();
        $attribute->delete();
        
        session()->flash('message', 'Attribute successfully deleted');
    
        return redirect()->route('admin.attribute.index');
    }
}
