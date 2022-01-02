@component('mail::message')
# Your Transaction Has Been Confirmed

Hi, {{$checkout->user->name}}
Your transaction has been confirmed, 
now you can enjoy the benefits of <b>{{$checkout->camp->title}}</b> camp.

@component('mail::button', ['url' => route('user.dashboard')])
My dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
