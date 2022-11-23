@component('mail::message', ['result' => $result])
# Halo, {{ $result->user->name }}

Berhasil melakukan prediksi. Kualitas sperma Anda {{ round($result->percentage, 2) . '% ' . $result->output }}

<ul>
    @foreach( $result->criterias as $criteria )
    <li>
        {{ $criteria->attribute->question }} 
        {{ $criteria->name }} @if( $criteria->attribute->unit ) {{ $criteria->attribute->unit }} @endif
    </li>
    @endforeach
</ul>

@component('mail::button', ['url' => $url])
Prediksi Lagi
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
