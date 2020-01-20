@component('mail::message')
<h2>Welcome to my insaClone App</h2>
<p>Thank you for registering.</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
