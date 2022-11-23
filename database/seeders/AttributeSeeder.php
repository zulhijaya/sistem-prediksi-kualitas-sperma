<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run()
    {
        $attr1 = Attribute::create([
            'name' => 'Musim',
            'description' => 'Musim dimana analisis dilakukan',
            'in_scale' => 0,
            'question' => 'Di daerah Anda, sedang mengalami musim apa?'
        ]);

        $attr1->criterias()->create([
            'name' => 'Musim hujan',
            'value' => 0
        ]);

        $attr1->criterias()->create([
            'name' => 'Musim kemarau',
            'value' => 1
        ]);

        $attr2 = Attribute::create([
            'name' => 'Umur',
            'description' => 'Umur pada saat analisis',
            'unit' => 'tahun',
            'in_scale' => 1,
            'question' => 'Berapa umur Anda sekarang?'
        ]);

        $beda = 1 / 36;
        for( $i = 18; $i <= 36; $i++ )
        {
            $attr2->criterias()->create([
                'name' => $i,
                'value' => round($i * $beda, 2)
            ]);
        }
        
        $attr3 = Attribute::create([
            'name' => 'Penyakit anak',
            'description' => 'Penyakit anak (yaitu, cacar air, campak, gondok, polio)',
            'in_scale' => 0,
            'question' => 'Apakah Anda pernah mengalami penyakit cacar air, campak, gondok, atau polio ketika kecil?'
        ]);

        $attr3->criterias()->create([
            'name' => 'Ya',
            'value' => 0
        ]);

        $attr3->criterias()->create([
            'name' => 'Tidak',
            'value' => 1
        ]);
        
        $attr4 = Attribute::create([
            'name' => 'Trauma serius',
            'description' => 'Kecelakaan atau trauma serius',
            'in_scale' => 0,
            'question' => 'Apakah Anda pernah mengalami kecelakaan atau trauma serius yang menyebabkan kerusakan alat reproduksi atau fungsinya?'
        ]);

        $attr4->criterias()->create([
            'name' => 'Ya',
            'value' => 0
        ]);

        $attr4->criterias()->create([
            'name' => 'Tidak',
            'value' => 1
        ]);
        
        $attr5 = Attribute::create([
            'name' => 'Pembedahan',
            'description' => 'Mengalami pembedahan',
            'in_scale' => 0,
            'question' => 'Apakah Anda pernah mengalami pembedahan seperti vasektomi, operasi testis, operasi prostat, atau operasi perut besar?'
        ]);

        $attr5->criterias()->create([
            'name' => 'Ya',
            'value' => 0
        ]);

        $attr5->criterias()->create([
            'name' => 'Tidak',
            'value' => 1
        ]);
        
        $attr6 = Attribute::create([
            'name' => 'Demam',
            'description' => 'Demam tinggi dalam setahun terakhir',
            'in_scale' => 0,
            'question' => 'Apakah Anda pernah mengalami demam tinggi yaitu 39°C atau lebih dalam setahun terakhir?'
        ]);

        $attr6->criterias()->create([
            'name' => 'Kurang dari tiga bulan yang lalu',
            'value' => -1
        ]);

        $attr6->criterias()->create([
            'name' => 'Lebih dari 3 bulan yang lalu',
            'value' => 0
        ]);

        $attr6->criterias()->create([
            'name' => 'Tidak pernah',
            'value' => 1
        ]);
        
        $attr7 = Attribute::create([
            'name' => 'Konsumsi alkohol',
            'description' => 'Frekuensi konsumsi alkohol',
            'in_scale' => 0,
            'question' => 'Seberapa sering Anda meminum alkohol dalam seminggu'
        ]);

        $attr7->criterias()->create([
            'name' => 'Beberapa kali sehari',
            'value' => 0
        ]);

        $attr7->criterias()->create([
            'name' => 'Setiap hari',
            'value' => 0.2
        ]);

        $attr7->criterias()->create([
            'name' => 'Beberapa kali seminggu',
            'value' => 0.4
        ]);

        $attr7->criterias()->create([
            'name' => 'Seminggu sekali',
            'value' => 0.6
        ]);

        $attr7->criterias()->create([
            'name' => 'Hampir tidak pernah',
            'value' => 0.8
        ]);

        $attr7->criterias()->create([
            'name' => 'Tidak pernah sama sekali',
            'value' => 1
        ]);
        
        $attr8 = Attribute::create([
            'name' => 'Merokok',
            'description' => 'Kebiasaan merokok',
            'in_scale' => 0,
            'question' => 'Seberapa sering Anda merokok?'
        ]);

        $attr8->criterias()->create([
            'name' => 'Tidak pernah',
            'value' => -1
        ]);

        $attr8->criterias()->create([
            'name' => 'Sesekali',
            'value' => 0
        ]);

        $attr8->criterias()->create([
            'name' => 'Setiap hari',
            'value' => 1
        ]);

        $attr9 = Attribute::create([
            'name' => 'Durasi duduk',
            'description' => 'Jumlah jam yang dihabiskan duduk perhari',
            'unit' => 'jam',
            'in_scale' => 1,
            'question' => 'Berapa jumlah jam yang Anda habiskan untuk duduk dalam sehari?'
        ]);

        $beda = 1 / 16;
        for( $i = 1; $i <= 16; $i++ )
        {
            $attr9->criterias()->create([
                'name' => $i,
                'value' => round($i * $beda, 2)
            ]);
        }
    }
}