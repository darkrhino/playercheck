@extends('layouts.app')
@section('title', 'Features')

@section('styles')
@endsection

@section('content')
    <div role="main">
        <div class="jumbotron jumbotron-features jumbotron-has-followup js-video-bg">
            <div class="container-responsive position-relative text-center text-white">
                <h1 class="alt-h1 lh-condensed mb-3">
                    How PlayerCheck works
                </h1>
                <p class="col-md-10 alt-lead mx-auto mb-5">
                    Used Airsoft Player Validation at its finest..
                </p>

                <div class="d-none d-md-flex flex-items-baseline flex-wrap flex-justify-center flex-md-nowrap mx-auto mt-5 pt-5 mb-4 lh-condensed v-align-bottom">
                    <a href="#player-feedback" class="d-block flex-md-item-equal p-2 mb-2 IconNav-item text-white pulse-three js-smoothscroll-anchor">
                        <span class="d-block text-gray-light">Player feedback</span>
                    </a>
                    <a href="#transaction-management" class="d-block flex-md-item-equal p-2 mb-2 IconNav-item pulse-two text-white js-smoothscroll-anchor">
                        <span class="d-block text-gray-light">Transaction<br> management</span>
                    </a>
                    <a href="#integrations" class="d-block flex-md-item-equal p-2 mb-2 IconNav-item text-white pulse-one js-smoothscroll-anchor">
                        <span class="d-block text-gray-light">Integrations</span>
                    </a>
                    <a href="#security" class="d-block flex-md-item-equal p-2 mb-2 IconNav-item text-white pulse-one js-smoothscroll-anchor">
                        <span class="d-block text-gray-light">Security</span>
                    </a>
                    <a href="#validation" class="d-block flex-md-item-equal p-2 mb-2 IconNav-item text-white pulse-two js-smoothscroll-anchor">
                        <span class="d-block text-gray-light">Validation</span>
                    </a>
                    <a href="#ongoing-support" class="d-block flex-md-item-equal p-2 mb-2 IconNav-item text-white pulse-three js-smoothscroll-anchor">
                        <span class="d-block text-gray-light">On-Going Support</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="featurette" id="player-feedback">
            <div class="container-responsive">
                <h6 class="alt-h4 text-normal text-gray text-center">
                    Player Feedback
                </h6>
                <h2 class="alt-h1 mt-3 mb-2 lh-condensed text-center">
                    Seamless player reviews
                </h2>
                <p class="f3 text-center mb-6 pb-md-4 col-md-8 mx-auto">
                    Player review is the surest path to better transactions, and it’s fundamental to how PlayerCheck works. Built-in review tools make player review an essential part of your process.
                </p>

                <hr class="mx-auto my-6" style="width: 200px;">
            </div>
        </div>

        <div class="featurette" id="transaction-management">
            <div class="container-responsive">
                <h6 class="alt-h4 text-normal text-center text-gray">
                    Transaction management
                </h6>
                <h2 class="alt-h1 mt-3 mb-2 lh-condensed text-center">
                    Manage your transactions
                </h2>
                <p class="f3 text-center mb-6 pb-md-4 col-md-8 mx-auto">
                    Get transactional security by keeping all your records in one place. Why spend ages trying to find that PayPal transaction ID hidden with other purchases when it can be clear.
                </p>
            </div>
        </div>

        <div class="featurette position-relative" id="integrations">
            <div class="container-responsive">
                <h6 class="alt-h4 text-normal text-gray">
                    Integrations
                </h6>
                <h2 class="alt-h1 mt-3 mb-3 col-md-8 col-lg-12 lh-condensed-ultra">
                    Find the right tool for the job
                </h2>
                <p class="f3 mb-4 col-md-7">
                    We are building simple integration tools to streamline the sale process, get instant validation for new customers and users joining your platform. Protect yourself and the sport.
                </p>

                <hr class="my-5" style="width: 3em;">

                <div class="d-md-flex">
                    <div class="col-md-6">
                        <h3 class="alt-h3 mb-1">Airsoft Retail Made Easy</h3>
                        <p class="mb-4">
                            We are building integration tools for software like magento, opencart, shopify and wordpress.
                        </p>
                        <h3 class="alt-h3 mb-1">Bye Bye Annual Fees</h3>
                        <p class="mb-4">
                            Our tools are free, no costs just easy validation. We only ask you add a logo to your site to spread the word.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="featurette" id="security">
            <div class="container-responsive">
                <h6 class="alt-h4 text-normal text-gray text-center">
                    Security As Standard
                </h6>
                <h2 class="alt-h1 mt-3 mb-2 lh-condensed text-center">
                    Trigger Discipline
                </h2>
                <p class="f3 text-center mb-6 pb-md-4 col-md-8 mx-auto">
                    We do all the work to make sure your information is safe and secure behind some of the toughest bank standard security measures..
                </p>

                <div class="d-md-flex flex-column flex-md-row my-5">
                    <div class="col-md-6 px-5">
                        <h3 class="alt-h3 mb-1">What we share</h3>
                        <p class="mb-4">
                            Not much actually, your details are stored to enable validation. When you enter these on
                            other sites they are compared with our database and a risk score is sent back. This is the
                            same as how credit cards are used.
                        </p>
                    </div>
                    <div class="col-md-6 px-5">
                        <h3 class="alt-h3 mb-1">Get Technical.</h3>
                        <p class="mb-4">
                            We use a rock solid 256-bit encryption algorithm with a cipher, all our information is stored
                            at the same level as netflix or amazon. We use a in-transit SSL and soon EV-SSL across our network.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="featurette" id="validation">
            <div class="container-responsive text-center">
                <h6 class="alt-h4 text-normal text-gray text-center">
                    Validation
                </h6>
                <h2 class="alt-h1 mt-3 mb-2 lh-condensed text-center">
                    How validation is done.
                </h2>
                <p class="f3 text-center mb-6 pb-md-4 col-md-8 mx-auto">
                    We wanted to provide a safe, easy and effective tool to validate not only players but also the sites they play at..
                </p>

                <div class="d-md-flex">
                    <div class="col-md-6 px-md-5 mb-5">
                        <h3 class="alt-h3 mb-1">Player to Player</h3>
                        <p>
                            Something that has been lacking is a good Player to Player validation that anyone can use.
                            We got it cracked. Simply put, you request a 48 hour one use code from a player, they give you that code
                            you plop it in a box and volia, validation.
                        </p>
                    </div>
                    <div class="col-md-6 px-md-5 mb-5">
                        <h3 class="alt-h3 mb-1">Player to Retailer</h3>
                        <p>
                            We understand you want to spend more time building great customer service and less time on administration
                            once your business is approved we provide you with a boring bulk validation tool.. don't panic we are building
                            tools that should integrate into your current store to allow for instant validation.
                        </p>
                    </div>
                </div>

                <hr class="mx-auto my-6" style="width: 200px;">

                <div class="col-md-6 mx-auto mb-5 text-center">
                    <h4 class="alt-h4 my-1">Player to Site</h4>
                    <p class="text-gray">
                        Sign up players and get rewards. Not only do you help the community but we provide ways for
                        sites to get recognition for protecting the sport with less administration then existing systems.
                    </p>
                </div>
            </div>
        </div>

        <div class="featurette" id="ongoing-support">
            <div class="container-responsive">
                <h6 class="alt-h4 text-normal text-gray text-center">
                    On-Going Support
                </h6>
                <h2 class="alt-h1 mt-3 mb-2 lh-condensed text-center">
                    Get help when you need it.
                </h2>
                <p class="f3 text-center mb-6 col-md-8 mx-auto">
                    PlayerCheck understands that issues happen, so we provide support all week long and normally get back to you within 4 hours.
                    If you require a legal support request such as police assistance with scammers we work directly with law enforcement to help recovery.
                    <br>
                    <strong>At no point do we provide user information to other users. We will only provide generalised information directly to the police.</strong>
                </p>
            </div>
        </div>

        <div class="featurette bg-gray-light">
            <div class="container-responsive">
                <div class="d-md-flex">
                    <div class="col-md-6 p-3 px-md-6">
                        <h2 class="alt-h3 mt-0 mb-1">
                            Protect your Business
                        </h2>
                        <p class="f4 mb-3">
                            Protect both your business and this sport, register your business today.
                        </p>
                        <a class="btn btn-outline-purple f4 py-2 px-3" href="/business">Learn more</a>
                    </div>
                    <div class="col-md-6 p-3 px-md-6">
                        <h2 class="alt-h3 mt-0 mb-1">
                            Protect yourself
                        </h2>
                        <p class="f4 mb-3">
                            PlayerCheck is free, we provide a valid defence system to keep you and the sport safe.
                        </p>
                        <a href="/register" class="btn btn-outline f4 py-2 px-3" rel="nofollow">Sign up for PlayerCheck</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection