<?php

namespace App\Http\Livewire\Backend\Attribute;

use Livewire\Component;
use App\Models\Attribute;

class Edit extends Component
{
    public Attribute $attribute;
    public $criterias;

    protected $rules = [
        'attribute.name' => 'required',
        'attribute.description' => 'required',
        'attribute.question' => 'required',
        'attribute.in_scale' => 'required',
        'attribute.unit' => 'required_if:attribute.in_scale, 1',
        'criterias.*.name' => 'required',
        'criterias.*.value' => 'required'
    ];

    public function mount()
    {
        $this->criterias = $this->attribute->load('criterias')->criterias;
    }

    public function render()
    {
        return view('livewire.backend.attribute.edit')->layout('layouts.backend', [
            'titles' => ['Attribute', 'Edit Attribute'],
            'create_link' => ''
        ]);
    }

    public function update()
    {
        $this->validate();

        $this->attribute->update([
            'name' => $this->attribute->name,
            'description' => $this->attribute->description,
            'question' => $this->attribute->question,
            'in_scale' => $this->attribute->in_scale,
            'unit' => $this->attribute->unit
        ]);

        foreach( $this->criterias as $criteria ) {
            $criteria->update([
                'name' => $criteria->name,
                'value' => $criteria->value
            ]);
        }
        
        session()->flash('message', 'Attribute successfully updated');
    
        return redirect()->route('admin.attribute.index');
    }
}
