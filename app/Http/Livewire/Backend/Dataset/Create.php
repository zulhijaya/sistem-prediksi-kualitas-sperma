<?php

namespace App\Http\Livewire\Backend\Dataset;

use App\Models\Dataset;
use Livewire\Component;
use App\Models\Attribute;

class Create extends Component
{
    public $data_type, $output;
    public $criterias = [];

    public function mount()
    {
        $attributes_count = Attribute::count();
        for( $i = 1; $i <= $attributes_count; $i++ ) {
            array_push($this->criterias, '');
        }
    }

    protected $rules = [
        'data_type' => 'required',
        'output' => 'required',
        'criterias' => 'required|array|min:9',
        'criterias.*' => 'required'
    ];

    public function render()
    {
        $attributes = Attribute::with('criterias')->get();

        return view('livewire.backend.dataset.create', [
            'attributes' => $attributes
        ])->layout('layouts.backend', [
            'titles' => ['Dataset', 'Add Dataset'],
            'create_link' => ''
        ]);
    }

    public function store()
    {
        $this->validate();

        $dataset = Dataset::create([
            'data_type' => $this->data_type,
            'output' => $this->output
        ]);

        foreach( $this->criterias as $criteria ) {
            $dataset->criterias()->attach($criteria);
        }
        
        session()->flash('message', 'Dataset successfully added');
    
        return redirect()->route('admin.dataset.index');
    }
}
