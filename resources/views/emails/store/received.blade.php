@component('mail::message')
# We have your store application!

Thanks for submitting **{!! $store->name !!}** to PlayerCheck, we will be reviewing it shortly.
To show your support for PlayerCheck consider sharing our page on your business page.
@component('mail::button', ['url' => 'https://www.facebook.com/AirsoftPlayerCheck'])
    PlayerCheck on Facebook
@endcomponent

Thanks,<br>
The PlayerCheck Team
@endcomponent