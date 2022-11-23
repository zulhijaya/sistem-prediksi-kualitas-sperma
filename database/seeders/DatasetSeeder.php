<?php

namespace Database\Seeders;

use App\Models\Dataset;
use App\Models\Attribute;
use Illuminate\Database\Seeder;

class DatasetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dataset::create([
        //     'season' => 'Musim hujan',
        //     'age' => 25,
        //     'childish_diseases' => 'Ya',
        //     'accident_or_serious_trauma' => 'Tidak',
        //     'surgical_intervention' => 'Tidak',
        //     'high_fevers' => 'Lebih dari 3 bulan yang lalu',
        //     'alcohol_consumption' => 'Hampir tidak pernah',
        //     'smoking_habit' => 'Sesekali',
        //     'number_of_hours_spent_sitting' => 14,
        //     'output' => 'normal',
        //     'data_type' => 'training'
        // ]);

        // Dataset::create([
        //     'season' => 'Musim hujan',
        //     'age' => 34,
        //     'childish_diseases' => 'Tidak',
        //     'accident_or_serious_trauma' => 'Ya',
        //     'surgical_intervention' => 'Tidak',
        //     'high_fevers' => 'Lebih dari 3 bulan yang lalu',
        //     'alcohol_consumption' => 'Hampir tidak pernah',
        //     'smoking_habit' => 'Setiap hari',
        //     'number_of_hours_spent_sitting' => 5,
        //     'output' => 'normal',
        //     'data_type' => 'training'
        // ]);

        $attributes = Attribute::with('criterias')->get();

        $datasets = [
            [
                'data_type' => 'training',
                'values' => [
                    [0,0.69,0,1,1,0,0.8,0,0.88,'N'],
                    [0,0.94,1,0,1,0,0.8,1,0.31,'O'],
                    [0,0.5,1,0,0,0,1,-1,0.5,'N'],
                    [0,0.75,0,1,1,0,1,-1,0.38,'N'],
                    [0,0.67,1,1,0,0,0.8,-1,0.5,'O'],
                    [0,0.67,1,0,1,0,0.8,0,0.5,'N'],
                    [0,0.67,0,0,0,-1,0.8,-1,0.44,'N'],
                    [0,1,1,1,1,0,0.6,-1,0.38,'N'],
                    [1,0.64,0,0,1,0,0.8,-1,0.25,'N'],
                    [1,0.61,1,0,0,0,1,-1,0.25,'N'],

                    [1,0.67,1,1,0,-1,0.8,0,0.31,'N'],
                    [1,0.78,1,1,1,0,0.6,0,0.13,'N'],
                    [1,0.75,1,1,1,0,0.8,1,0.25,'N'],
                    [1,0.81,1,0,0,0,1,-1,0.38,'N'],
                    [1,0.94,1,1,1,0,0.2,-1,0.25,'N'],
                    [1,0.81,1,1,0,0,1,1,0.5,'N'],
                    [1,0.64,1,0,1,0,1,-1,0.38,'N'],
                    [1,0.69,1,0,1,0,0.8,-1,0.25,'O'],
                    [1,0.75,1,1,1,0,1,1,0.25,'N'],
                    [1,0.67,1,0,0,0,0.8,1,0.38,'O'],

                    [1,0.67,0,0,1,0,0.8,-1,0.25,'N'],
                    [1,0.75,1,0,0,0,0.6,0,0.25,'N'],
                    [1,0.67,1,1,0,0,0.8,-1,0.25,'N'],
                    [1,0.69,1,0,1,-1,1,-1,0.44,'O'],
                    [1,0.56,1,0,1,0,1,-1,0.63,'N'],
                    [1,0.67,1,0,0,0,1,-1,0.25,'N'],
                    [1,0.67,1,0,1,0,0.6,-1,0.38,'O'],
                    [1,0.78,1,1,0,1,0.6,-1,0.38,'O'],
                    [1,0.58,0,0,1,0,1,-1,0.19,'N'],
                    [1,0.67,0,0,1,0,0.6,0,0.5,'O'],
                    
                    [1,0.61,1,0,1,0,1,-1,0.63,'N'],
                    [1,0.56,1,0,0,0,1,-1,0.44,'N'],
                    [1,0.64,0,0,0,0,1,-1,0.63,'N'],
                    [1,0.58,1,1,1,0,0.8,0,0.44,'N'],
                    [1,0.56,1,1,1,0,1,-1,0.63,'N'],
                    [0,0.78,1,1,0,1,0.6,-1,0.38,'N'],
                    [0,0.78,1,0,1,0,1,-1,0.25,'N'],
                    [0,0.56,1,0,1,0,1,-1,0.63,'N'],
                    [0,0.67,0,0,1,0,0.6,0,0.5,'O'],
                    [0,0.69,1,0,0,0,1,-1,0.31,'N'],

                    [0,0.53,1,1,1,0,0.8,1,0.5,'N'],
                    [0,0.56,1,1,0,0,0.8,1,0.5,'N'],
                    [0,0.58,1,0,1,-1,0.8,1,0.5,'N'],
                    [0,0.56,1,0,0,0,1,-1,0.44,'N'],
                    [0,0.53,1,1,0,1,1,0,0.31,'N'],
                    [0,0.53,1,0,0,1,1,0,0.44,'N'],
                    [0,0.56,1,0,0,0,1,-1,0.63,'N'],
                    [0,0.72,1,1,0,0,0.6,1,0.19,'N'],
                    [0,0.64,1,1,1,0,0.8,-1,0.31,'N'],
                    [0,0.75,1,1,1,0,0.6,-1,0.19,'N'],

                    [0,0.67,1,0,1,0,0.8,-1,0.19,'N'],
                    [0,0.53,1,1,0,1,1,-1,0.75,'N'],
                    [0,0.53,1,1,0,0,0.8,0,0.5,'N'],
                    [0,0.58,1,1,1,-1,0.8,0,0.19,'N'],
                    [0,0.61,1,0,1,0,1,-1,0.63,'N'],
                    [0,0.58,1,0,1,0,0.8,1,0.19,'N'],
                    [0,0.53,1,1,0,0,0.8,0,0.75,'N'],
                    [0,0.69,1,1,1,-1,1,-1,0.75,'N'],
                    [0,0.56,1,1,0,0,0.4,1,0.63,'N'],
                    [1,0.58,0,0,0,1,0.8,1,0.44,'N'],

                    [1,0.56,0,0,0,1,0.8,0,1,'N'],
                    [0,0.64,1,0,0,1,1,1,0.25,'N'],
                    [0,0.61,1,1,1,0,0.6,-1,0.38,'N'],
                    [0,0.56,1,0,0,1,1,-1,0.5,'N'],
                    [0,0.53,1,0,0,1,0.8,-1,0.31,'N'],
                    [0,0.56,0,0,1,0,1,-1,0.56,'N'],
                    [0,0.5,1,1,0,-1,0.8,0,0.88,'N'],
                    [0,0.5,1,0,0,1,1,-1,0.44,'N'],
                    [0,0.5,1,0,0,1,0.8,0,0.31,'N'],
                    [0,0.5,1,0,1,-1,0.8,-1,0.5,'N'],

                    [0,0.5,1,1,0,-1,0.8,0,0.88,'O'],
                    [1,0.69,1,0,0,1,1,-1,0.31,'N'],
                    [1,0.56,1,0,0,1,0.6,0,0.5,'N'],
                    [0,0.5,1,0,0,1,0.8,-1,0.44,'N'],
                    [0,0.53,1,0,0,1,0.8,-1,0.63,'N'],
                ]
            ],
            [
                'data_type' => 'testing',
                'values' => [
                    [0,0.78,1,0,1,1,1,1,0.25,'N'],
                    [0,0.75,1,0,1,1,0.6,0,0.56,'N'],
                    [0,0.72,1,1,1,1,0.8,-1,0.19,'N'],
                    [0,0.53,1,1,0,1,0.8,-1,0.38,'N'],
                    [0,1,1,0,1,1,0.6,0,0.25,'N'],

                    [0,0.92,1,1,0,1,1,-1,0.63,'N'],
                    [0,0.81,1,1,1,1,0.8,0,0.19,'N'],
                    [0,0.92,1,0,0,1,0.6,-1,0.19,'N'],
                    [0,0.86,1,1,1,1,1,-1,0.25,'N'],
                    [0,0.78,1,0,0,1,1,1,0.06,'O'],
                    [0,0.89,1,1,0,0,0.6,1,0.31,'N'],
                    [0,0.75,1,1,1,0,0.6,1,0.25,'N'],
                    [0,0.75,1,1,1,1,0.8,1,0.25,'N'],
                    [0,0.83,1,1,1,0,1,-1,0.31,'N'],
                    [0,0.81,1,1,1,0,1,1,0.38,'N'],

                    [0,0.81,1,1,1,1,0.8,-1,0.38,'N'],
                    [1,0.78,1,0,0,0,1,1,0.06,'N'],
                    [1,0.75,1,1,0,0,0.8,-1,0.38,'N'],
                    [1,0.75,1,0,1,0,0.8,-1,0.44,'O'],
                    [1,0.58,1,0,0,0,0.6,1,0.5,'N'],
                    [0,0.67,1,0,0,0,1,-1,0.5,'N'],
                    [0,0.61,1,0,0,0,0.8,0,0.5,'N'],
                    [0,0.67,1,1,1,0,1,-1,0.31,'N'],
                    [0,0.64,1,0,1,0,1,0,0.19,'N'],
                    [0,0.69,0,1,1,0,0.6,-1,0.19,'N']
                ]
            ]
        ];

        foreach( $datasets as $dataset ) {
            foreach( $dataset['values'] as $value ) {
                $output = end($value) == 'N' ? 'normal' : 'altered';
                $target = Dataset::create([
                    'data_type' => $dataset['data_type'],
                    'output' => $output,
                ]);
    
                foreach( $attributes as $index => $attribute ) {
                    $criteria_id = $attribute->criterias()->where('value', $value[$index])->first();
                    $target->criterias()->attach($criteria_id);
                }
            }
        }
    }
}