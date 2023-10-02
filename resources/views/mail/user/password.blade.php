@component('mail::message')
    Ваш пароль: {{ $password }}
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent



