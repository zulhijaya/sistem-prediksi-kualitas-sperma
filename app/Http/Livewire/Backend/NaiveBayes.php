<?php

namespace App\Http\Livewire\Backend;

use App\Models\Dataset;
use Livewire\Component;
use App\Models\Criteria;
use App\Models\Attribute;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class NaiveBayes extends Component
{
    public function render()
    {
        // $attributes = Attribute::with(['criterias' => function($query) {
        //     $query->with(['datasets' => function($query) {
        //         $query->get()->groupBy('output');
        //     }]);
        // }])->get();
        // $attributes = Criteria::withCount('datasets')->with('datasets')->get();
        $attributes = Attribute::with(['criterias' => function($query) {
            $query->withCount(['datasets' => function($query) {
                $query->where('data_type', 'training');
            }])->with(['datasets' => function($query) {
                $query->where('data_type', 'training');
            }]);
        }])->get();

        $total = Dataset::select('output', DB::raw('count(*) as datasets_count'))->where('data_type', 'training')->groupBy('output')->get();
        // $criterias = Criteria::withCount('datasets')->get()->groupBy('datasets.output');
        // dd($criterias[''][1]);
        // $attributes = Criteria::with([ 'datasets' => function ($query) {
        //     $query->select('criteria_id', 'output')
        //         ->selectRaw('COUNT(*) AS total')
        //         ->groupBy('output');
        // } ])->get();
        // $attributes = Criteria::withCount('datasets')
        //         ->with(['datasets' => function ($query) {
        //             $query->groupBy('output');
        //         }])->get();
        // $attributes = Criteria::selectRaw('count(*) as count, output')
        //     ->join('criteria_dataset', 'criterias.id', '=', 'criteria_dataset.criteria_id')
        //     ->join('datasets', 'datasets.id', '=', 'criteria_dataset.dataset_id')
        //     ->groupBy('datasets.output')->get();
        // dd($attributes[0]->criterias[1]->datasets->count() > 0);

        return view('livewire.backend.naive-bayes', [
            'attributes' => $attributes,
            'total' => $total
        ])->layout('layouts.backend', [
            'titles' => ['Naive Bayes'],
            'create_link' => ''
        ]);
    }

    public function naiveBayesCalculation($criterias)
    {
        $datasets = Dataset::select('output')->where('data_type', 'training')->get();
        $total_normal = $datasets->where('output', 'normal')->count();
        $total_altered = $datasets->where('output', 'altered')->count();

        $probs = [
            'normal_PFCxPC' => round($total_normal / $datasets->count(), 2),
            'altered_PFCxPC' => round($total_altered / $datasets->count(), 2),
            // 'PF' => 1
        ];

        foreach( $criterias as $criteria )
        {
            $total_attr_normal = $criteria->loadCount(['datasets' => function($query) {
                $query->where('data_type', 'training')->where('output', 'normal');
            }])['datasets_count'];
            
            $total_attr_altered = $criteria->loadCount(['datasets' => function($query) {
                $query->where('data_type', 'training')->where('output', 'altered');
            }])['datasets_count'];

            $total_criteria = $criteria->loadCount(['datasets' => function($query) {
                $query->where('data_type', 'training');
            }])['datasets_count'];
            
            $probs['normal_PFCxPC'] *= round($total_attr_normal / $total_normal, 2);
            $probs['altered_PFCxPC'] *= round($total_attr_altered / $total_altered, 2);

            // $probs['PF'] *= round($total_criteria / $datasets->count(), 2);
        }

        return $probs['normal_PFCxPC'];
    }
}
