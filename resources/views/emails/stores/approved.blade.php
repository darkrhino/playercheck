@component('mail::message')
# We have approved your store application!

**{!! $store->name !!}** is now a approved store on PlayerCheck.
You can now access store controls to validate buyers from your store, we have also granted you access to use the
PlayerCheck Logo to show trust and compliance with the UK [VCRA 2006 Law](https://www.legislation.gov.uk/ukpga/2006/38/contents).

@component('mail::button', ['url' => route('control.dashboard.index')])
Business Dashboard
@endcomponent

Thanks,<br>
The PlayerCheck Team
@endcomponent