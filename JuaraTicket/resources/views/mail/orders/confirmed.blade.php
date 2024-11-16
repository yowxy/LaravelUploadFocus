<x-mail::message>
Hi {{ $booking->name }}, terima kasih ttelah memesan tiket wisata di JuaraTicket, Kami sedang memeriksan pembayaran anda saat ini, anda dapat memeriksa secara berkala pada website kami dan berikut adalah bookig transaction ID anda : {{ $booking->booking_trx_id }}

<x-mail::button :url="route('front.check.booking')">
Check Booking
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
