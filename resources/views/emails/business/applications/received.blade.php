@component('mail::message')
# We have your business application!

Thanks for submitting **{!! $business->name !!}** to PlayerCheck, we will be reviewing it shortly.
To show your support for PlayerCheck consider sharing our page on your business page.
@component('mail::button', ['url' => 'https://www.facebook.com/PlayerCheck-1504190733006420/'])
    PlayerCheck on Facebook
@endcomponent

Thanks,<br>
The PlayerCheck Team
@endcomponent