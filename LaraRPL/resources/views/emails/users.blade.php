@component('mail::message')


ini adalah Notifikasi Bahwa Pembayaran anda telah di verifikasi.

Details Invoice Sebagai Berikut :<br>
Kode Invoice : {{$dinvo->kode_invoice}}<br>
Tanggal Cetak : {{$dinvo->tgl_cetak}}<br>
Pembayaran : {{$dinvo->tipe_bayar}}<br>
Jam Berangkat : {{$dinvo->berangkat}}<br>
Jam Sampai : {{$dinvo->sampai}}<br>
Lokasi : {{$dinvo->lokasi}}<br>
Tujuan : {{$dinvo->tujuan}}<br>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/home'])
Blog
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
