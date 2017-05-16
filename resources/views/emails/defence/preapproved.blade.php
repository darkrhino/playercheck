@component('mail::message')
# {!! $site->name !!} has approved you!

**{!! $site->name !!}** added you as valid player and updated details on your behalf.
If you hold a PlayerCheck account you can login and see your validation information, if not [click here](http://playercheck.co.uk/password/reset/{!! $user->resets->first()->token !!} "Set your password") to set your password.

You can now use your defence as a method of buying and selling airsoft realistic imitation firearms.
@component('mail::panel')
Over the next few months we will be working with businesses to gain a foothold as an approved regulated defence provider,
you can help by telling your friends and fellow players about us.
@endcomponent
If you hold any other defences that your site knows about they will also be added to your account.

@component('mail::button', ['url' => route('dashboard.index')])
    User Dashboard
@endcomponent

Thanks,<br>
The PlayerCheck Team
@endcomponent