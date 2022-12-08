@component('mail::message')


ini adalah Notifikasi Bahwa Pembayaran anda telah di verifikasi.

@component('mail::button', ['url' => '/home'])
Blog
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
