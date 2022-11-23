<?php

namespace App\Http\Livewire\Backend\Result;

use PDF;
use Carbon\Carbon;
use App\Models\Result;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public function render()
    {
        $results = Result::with('user')->where('user_id', '!=', Auth::user()->id)->get();
        
        return view('livewire.backend.result.index', [
            'results' => $results
        ])->layout('layouts.backend', [
            'titles' => ['Hasil Prediksi'],
            'create_link' => 'sdkfjks'
        ]);
    }

    public function generate()
    {
        $dates = Result::with('user')->orderBy('created_at')->get()->groupBy(function($item) {
            return Carbon::parse($item->created_at)->isoFormat('D MMM YYYY');
       });
 
    	$pdf = PDF::loadView('pdf', ['dates' => $dates]);
    	return $pdf->download('Laporan Hasil Prediksi.pdf');
    }
}
