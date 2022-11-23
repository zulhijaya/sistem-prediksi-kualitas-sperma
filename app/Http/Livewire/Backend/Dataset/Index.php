<?php

namespace App\Http\Livewire\Backend\Dataset;

use App\Models\Dataset;
use Livewire\Component;
use App\Models\Criteria;
use App\Models\Attribute;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public function render()
    {
        $attributes = Attribute::get();
        $datas = Dataset::with('criterias')->get()->groupBy('data_type');

        return view('livewire.backend.dataset.index', [
            'attributes' => $attributes,
            'datas' => $datas
        ])->layout('layouts.backend', [
            'titles' => ['Dataset'],
            'create_link' => 'dataset'
        ]);
    }

    public function delete(Dataset $dataset)
    {
        $dataset->criterias()->detach();
        $dataset->delete();
        
        session()->flash('message', 'Dataset successfully deleted');
    
        return redirect()->route('admin.dataset.index');
    }
}
