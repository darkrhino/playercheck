@component('mail::message')
# We have approved your business application!

**{!! $business->name !!}** is now a approved business on PlayerCheck.
You can now access the business dashboard that will allow you create a retail store or site. Each retail store
or Game Site requires a second approval but these are normally quicker.
@component('mail::button', ['url' => route('control.index')])
    Business Dashboard
@endcomponent

Thanks,<br>
The PlayerCheck Team
@endcomponent