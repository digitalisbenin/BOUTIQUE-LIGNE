{{--  <x-mail::message>  --}}
{{-- Greeting --}}
{{--  @if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hello!')
@endif
@endif  --}}

{{-- Intro Lines --}}
{{--  @foreach ($introLines as $line)
{{ $line }}

@endforeach  --}}

{{-- Action Button --}}
{{--  @isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
{{ $actionText }}
</x-mail::button>
@endisset  --}}

{{-- Outro Lines --}}
{{--  @foreach ($outroLines as $line)
{{ $line }}

@endforeach  --}}

{{-- Salutation --}}
{{--  @if (! empty($salutation))
{{ $salutation }}
@else
@lang('Regards'),<br>
{{ config('app.name') }}
@endif  --}}

{{-- Subcopy --}}
{{--  @isset($actionText)
<x-slot:subcopy>
@lang(
    "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>
@endisset
</x-mail::message>  --}}
@component('mail::message')
 Bonjour,

Vous recevez cet email car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.

@component('mail::button', ['url' => $actionUrl])
Réinitialiser le mot de passe
@endcomponent

Ce lien de réinitialisation de mot de passe expirera dans 60 minutes.

Si vous n'avez pas demandé cette réinitialisation, vous pouvez ignorer cet email.

Cordialement,
{{ config('app.name') }}

@component('mail::subcopy')
Si vous avez des difficultés pour cliquer sur le bouton "Réinitialiser le mot de passe", copiez et collez l'URL ci-dessous dans votre navigateur web :
[{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endcomponent
