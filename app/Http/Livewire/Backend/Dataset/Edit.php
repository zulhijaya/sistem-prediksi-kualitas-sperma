<?php

namespace App\Http\Livewire\Backend\Dataset;

use App\Models\Dataset;
use Livewire\Component;
use App\Models\Attribute;

class Edit extends Component
{
    public Dataset $dataset;
    public $criteria_ids = [];

    protected $rules = [
        'dataset.data_type' => 'required',
        'dataset.output' => 'required',
        'criteria_ids.*' => 'required'
    ];

    public function mount()
    {
        $this->criteria_ids = $this->dataset->load('criterias')->criterias->pluck('id');
    }
    
    public function render()
    {
        $attributes = Attribute::with('criterias')->get();

        return view('livewire.backend.dataset.edit', [
            'attributes' => $attributes
        ])->layout('layouts.backend', [
            'titles' => ['Dataset', 'Edit Dataset'],
            'create_link' => ''
        ]);
    }

    public function update()
    {
        $this->validate();

        $this->dataset->update([
            'data_type' => $this->dataset->data_type,
            'output' => $this->dataset->output
        ]);

        $this->dataset->criterias()->detach();
        foreach( $this->criteria_ids as $criteria_id ) {
            $this->dataset->criterias()->attach($criteria_id);
        }
        
        session()->flash('message', 'Dataset successfully updated');
    
        return redirect()->route('admin.dataset.index');
    }
}
