@component('mail::message')
# Registered at {{$checkout->camp->title}} camp

Hi, {{$checkout->User->name}}
<br>
Thank you for your registration on <b>{{$checkout->camp->title}}</b>,
pleace check payment instructions by click the button below.

@component('mail::button', ['url' => route('dashboard', $checkout->id)])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
