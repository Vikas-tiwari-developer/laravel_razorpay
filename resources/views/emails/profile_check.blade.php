@component('mail::message')
# Hi, {{ $user->name }}

Someone check your profile, visit site for more info!!

@component('mail::button', ['url' => 'http://machine_test.test/'])
Click Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
