<?php

namespace App\Http\Livewire\Frontend;

use App\Mail\HasilPrediksiAnda;
use App\Models\Dataset;
use Livewire\Component;
use App\Models\Criteria;
use App\Models\Attribute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class Diagnosis extends Component
{
    public $active = 1;
    public $answer = [
        0 => '',
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => ''
    ];

    public function render()
    {
        $attributes = Attribute::with('criterias')->get();

        return view('livewire.frontend.diagnosis', [
            'attributes' => $attributes
        ])->layout('layouts.frontend', [
            'title' => 'Prediksi'
        ]);
    }

    public function predict()
    {
        $datasets = Dataset::select('output')->where('data_type', 'training')->get();

        $criterias = Criteria::whereIn('id', $this->answer)->get();
            
        $normal_PC = round($datasets->where('output', 'normal')->count() / $datasets->count(), 2);
        $altered_PC = round($datasets->where('output', 'altered')->count() / $datasets->count(), 2);

        $probs = $this->naiveBayesCalculation($criterias, $datasets);

        $normal_PFC = $probs['normal_PFC'];
        $altered_PFC = $probs['altered_PFC'];
        $PF = $probs['PF'];

        if( $normal_PFC == 0 || $altered_PFC == 0 ) {
            $normal_PFC = $this->laplacian_correction_PFC('normal', $criterias, $datasets);
            $altered_PFC = $this->laplacian_correction_PFC('altered', $criterias, $datasets);
            $PF = $this->laplacian_correction_PF($criterias, $datasets->count());
        }

        $normal_PCF = $normal_PFC * $normal_PC / $PF;
        $altered_PCF = $altered_PFC * $altered_PC / $PF;

        $result = Auth::user()->results()->create([
            'normal_value' => $normal_PCF,
            'altered_value' => $altered_PCF,
            'output' => $normal_PCF > $altered_PCF ? 'normal' : 'altered',
            'percentage' => ($normal_PCF / ($normal_PCF + $altered_PCF)) * 100
        ]);

        $result->criterias()->attach($this->answer);
        
        Mail::to(Auth::user())->send(new HasilPrediksiAnda($result));

        return redirect()->route('result', $result);
    }

    public function laplacian_correction_PFC($class, $criterias, $datasets)
    {
        // $tes = [];
        $total_class = $class == 'normal' ? $datasets->where('output', 'normal')->count() : $datasets->where('output', 'altered')->count();
        // $PFCxPC = round($total_class / $datasets->count(), 2);
        $PFC = 1;
        foreach( $criterias as $criteria )
        {
            $total_attr_class = $criteria->datasets()->where('data_type', 'training')->where('output', $class)->count();

            // $tes[$criteria->attribute->name . ' "' . $criteria->name . '"'][$class]['total_attr'] = $total_attr_class + 1;
            // $tes[$criteria->attribute->name . ' "' . $criteria->name . '"'][$class]['PFC'] = round(($total_attr_class + 1) / ($total_class + count($this->answer)), 2);

            $PFC *= round(($total_attr_class + 1) / ($total_class + count($this->answer)), 2);
        };
        // dd($tes, $PFC);

        return $PFC;
    }

    public function laplacian_correction_PF($criterias, $total_dataset)
    {
        // $tes = [];
        $PF = 1;
        foreach( $criterias as $criteria )
        {
            $total_criteria = $criteria->datasets()->where('data_type', 'training')->count();
            // $tes[$criteria->attribute->name . ' "' . $criteria->name . '"']['PF']['total_criteria'] = $total_criteria + 1;
            // $tes[$criteria->attribute->name . ' "' . $criteria->name . '"']['PF']['result'] = round(($total_criteria + 1) / ($total_dataset + count($this->answer)), 2);

            $PF *= round(($total_criteria + 1) / ($total_dataset + count($this->answer)), 2);
        };

        // dd($tes, $PF);
        return $PF;
    }

    public function naiveBayesCalculation($criterias, $datasets)
    {
        // $tes = [];
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

            // $tes[$criteria->attribute->name . ' "' . $criteria->name . '"']['normal']['total_attr'] = $total_attr_normal;
            // $tes[$criteria->attribute->name . ' "' . $criteria->name . '"']['normal']['PFC'] = round($total_attr_normal / $total_normal, 2);
            // $tes[$criteria->attribute->name . ' "' . $criteria->name . '"']['altered']['total_attr'] = $total_attr_altered;
            // $tes[$criteria->attribute->name . ' "' . $criteria->name . '"']['altered']['PFC'] = round($total_attr_altered / $total_altered, 2);
            // $tes[$criteria->attribute->name . ' "' . $criteria->name . '"']['PF']['total_criteria'] = $total_criteria;
            // $tes[$criteria->attribute->name . ' "' . $criteria->name . '"']['PF']['result'] = round($total_criteria / $datasets->count(), 2);

            $probs['normal_PFC'] *= round($total_attr_normal / $total_normal, 2);
            $probs['altered_PFC'] *= round($total_attr_altered / $total_altered, 2);

            $probs['PF'] *= round($total_criteria / $datasets->count(), 2);
        }

        // dd($tes, $probs['normal_PFC'], $probs['altered_PFC'], $probs['PF']);

        return $probs;
    }
}