
@component('mail::message')
# Bonjour,

Vous avez reçu un email de la part de {{ $email }}<br><br>


{{$content}} <br><br>

Cordialement,<br><br>
Votre honorable application {{ config('app.name') }}
@slot('footer')
    @component('mail::footer')
        © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
    @endcomponent
@endslot
@endcomponent