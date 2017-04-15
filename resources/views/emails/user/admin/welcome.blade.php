@component('mail::message')
# Welcome to PlayerCheck!

Thanks for joining **{!! $user->fullName !!}**, we are working hard to provide a safer place for airsoft.

To show your support for PlayerCheck consider sharing and liking our page on facebook.
@component('mail::button', ['url' => 'https://www.facebook.com/PlayerCheck-1504190733006420/'])
    PlayerCheck on Facebook
@endcomponent

Thanks,<br>
The PlayerCheck Team
@endcomponent