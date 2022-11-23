<?php

namespace App\Http\Livewire\Backend;

use App\Models\Dataset;
use Livewire\Component;
use App\Models\Criteria;
use App\Models\Attribute;

class Testing extends Component
{
    public function render()
    {
        $attributes = Attribute::get();
        $datasets = Dataset::with('criterias')->where('data_type', 'testing')->get();

        $results = $this->testDataTesting($datasets);

        return view('livewire.backend.testing', [
            'attributes' => $attributes,
            'datasets' => $datasets,
            'results' => $results
        ])->layout('layouts.backend', [
            'titles' => ['Pengujian Data Testing'],
            'create_link' => ''
        ]);
    }

    public function testDataTesting($testing_datas)
    {
        $results = []; 
        $datasets = Dataset::select('output')->where('data_type', 'training')->get();

        foreach( $testing_datas as $dataset ) {
            $data = $dataset->criterias->pluck('id')->toArray();
            $criterias = Criteria::whereIn('id', $data)->get();
            
            $normal_PC = round($datasets->where('output', 'normal')->count() / $datasets->count(), 2);
            $altered_PC = round($datasets->where('output', 'altered')->count() / $datasets->count(), 2);
            
            $probs = $this->naiveBayesCalculation($criterias, $datasets);
    
            $normal_PFC = $probs['normal_PFC'];
            if( $probs['normal_PFC'] == 0 ) {
                $normal_PFC = $this->laplacian_correction_PFCxPC('normal', $criterias, $datasets, count($data));
            }
    
            $altered_PFC = $probs['altered_PFC'];
            if( $probs['altered_PFC'] == 0 ) {
                $altered_PFC = $this->laplacian_correction_PFCxPC('altered', $criterias, $datasets, count($data));
            }
    
            $PF = $probs['PF'];
            if( $probs['PF'] == 0 ) {
                $PF = $this->laplacian_correction_PF($criterias, $datasets->count(), count($data));
            }
    
            $normal_PCF = $normal_PFC * $normal_PC / $PF;
            $altered_PCF = $altered_PFC * $altered_PC / $PF;
    
            array_push($results, $normal_PCF > $altered_PCF ? 'normal' : 'altered');
        }

        return $results;
    }

    public function laplacian_correction_PFCxPC($class, $criterias, $datasets, $data_count)
    {
        $total_class = $class == 'normal' ? $datasets->where('output', 'normal')->count() : $datasets->where('output', 'altered')->count();
        $PFCxPC = 1;
        foreach( $criterias as $criteria )
        {
            $total_attr_class = $criteria->loadCount(['datasets' => function($query) use ($class) {
                $query->where('output', $class);
            }])['datasets_count'];

            $PFCxPC *= round(($total_attr_class + 1) / ($total_class + $data_count), 2);
        };

        return $PFCxPC;
    }

    public function laplacian_correction_PF($criterias, $total_dataset, $data_count)
    {
        $PF = 1;
        foreach( $criterias as $criteria )
        {
            $PF *= round(($criteria->datasets_count + 1) / ($total_dataset + $data_count), 2);
        };

        return $PF;
    }

    public function naiveBayesCalculation($criterias, $datasets)
    {
        $total_normal = $datasets->where('output', 'normal')->count();
        $total_altered = $datasets->where('output', 'altered')->count();

        $probs = [
            'normal_PFC' => 1,
            'altered_PFC' => 1,
            'PF' => 1
        ];

        foreach( $criterias as $criteria )
        {
            $total_attr_normal = $criteria->datasets()->where('data_type', 'training')->where('output', 'normal')->count();
            $total_attr_altered = $criteria->datasets()->where('data_type', 'training')->where('output', 'altered')->count();
            $total_criteria = $criteria->datasets()->where('data_type', 'training')->count();
            
            $probs['normal_PFC'] *= round($total_attr_normal / $total_normal, 2);
            $probs['altered_PFC'] *= round($total_attr_altered / $total_altered, 2);

            $probs['PF'] *= round($total_criteria / $datasets->count(), 2);
        }

        return $probs;
    }
}
