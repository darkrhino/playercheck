@component('mail::message')
    # You have been invited to join **PlayerCheck**

    PlayerCheck is a airsoft defence platform, we provide a free alternative way to validate a players defence. From players to business, you can check and review transactions.

    @component('mail::button', ['url' => $url])
        Accept Invite
    @endcomponent

    Thanks,<br>
    PlayerCheck Team
@endcomponent