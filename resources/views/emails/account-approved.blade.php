@component('mail::message', ['name' => $name])
# Halo, {{ $name }}

Akun Anda telah disetujui. Silahkan login kembali untuk melakukan prediksi kualitas sperma Anda.

@component('mail::button', ['url' => config('app.url') . '/user/accept-approval/' . $id])
Terima Persetujuan
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
