@component('mail::message')
# Nouveau Message de contact

<strong>Nom :</strong> {{ $data['nom']}}<br>
<strong>Email :</strong> {{ $data['email']}}<br>
<strong>Message :</strong> {{ $data['mycomm']}}<br>
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
