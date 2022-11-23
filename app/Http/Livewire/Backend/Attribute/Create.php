<?php

namespace App\Http\Livewire\Backend\Attribute;

use Livewire\Component;
use App\Models\Attribute;

class Create extends Component
{
    public $name, $description, $question;
    public $in_scale = 0;
    public $number_of_criteria = 1, $criterias = [], $values = [];
    public $first_criteria, $last_criteria, $unit;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'question' => 'required',
        'in_scale' => 'required',
        'unit' => 'required_if:in_scale, 1',
        'first_criteria' => 'required_if:in_scale, 1',
        'last_criteria' => 'required_if:in_scale, 1',
        'number_of_criteria' => 'required_if:in_scale, 0|numeric',
        'criterias' => 'required_if:in_scale, 0|array',
        'criterias.*' => 'required_if:in_scale, 0',
        'values' => 'required_if:in_scale, 0|array',
        'values.*' => 'required_if:in_scale, 0'
    ];

    public function render()
    {
        return view('livewire.backend.attribute.create')->layout('layouts.backend', [
            'titles' => ['Attribute', 'Add Attribute'],
            'create_link' => ''
        ]);
    }

    public function store()
    {
        $this->validate();

        $attribute = Attribute::create([
            'name' => $this->name,
            'description' => $this->description,
            'question' => $this->question . '?',
            'in_scale' => $this->in_scale,
            'unit' => $this->unit
        ]);

        if( $this->in_scale ) 
        {
            $differentiator = 1 / $this->last_criteria;
            for( $i = $this->first_criteria; $i <= $this->last_criteria; $i++ )
            {
                $attribute->criterias()->create([
                    'name' => $i,
                    'value' => round($i * $differentiator, 2)
                ]);
            }
        } else {
            $this->validate([ 
                'criterias' => 'min:' . $this->number_of_criteria,
                'values' => 'min:' . $this->number_of_criteria
            ]);

            for( $i = 0; $i < count($this->criterias); $i++ )
            {
                $attribute->criterias()->create([
                    'name' => $this->criterias[$i],
                    'value' => $this->values[$i]
                ]);
            }
        }
        
        session()->flash('message', 'Attribute successfully added');
    
        return redirect()->route('admin.attribute.index');
    }
}
