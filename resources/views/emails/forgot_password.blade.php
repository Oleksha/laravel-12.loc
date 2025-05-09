@component('mail::message')
    Hi? {{ $user->name }}. Forgot Password?

    It Happens.

    @component('mail::button', ['url' => url('reset/' . $user->remember_token)])
        Reset your password
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
