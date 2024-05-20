@component('mail::message')

<p>Hello {{  $user->name }}</p>

@component('mail::button',['url' => url('verify/'.$user->remember_token)])
Verify
@endcomponent

<p>In case you have issues please contact our contact us.</p>

Thanks <br />
{{ config('app.name') }}

@endcomponent