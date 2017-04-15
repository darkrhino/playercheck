@extends('layouts.app')
@section('title', 'Help Centre')

@section('styles')
@endsection

@section('content')
    <div role="main">
        <div class="pagehead explore-head">
            <div class="container">
                <nav class="underline-nav float-right" role="navigation" data-pjax="">

                </nav>
                <h1>
                    <a class="pagehead-heading" href="{{route('help.index')}}">
                        Help Centre
                    </a>
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-info">
                        <p>This should be updated shortly with questions from the community response forums..</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fa fa-question-circle"></i> Is this a replacement for other validation systems?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Not originally the idea was to work with current validation systems to
                                            provide a digital integration system to allow retailers, forums, game sites
                                            and stores a way to validate UK players without the need for long hours. It
                                            quickly became apparent that other validation providers did not want to work
                                            with us so we became a self-contained validation system.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fa fa-question-circle"></i> Is this an accepted validation?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Not yet, UK Law is very particular about how we self-regulate, PlayerCheck is
                                            not ready nor has the following of other approved validation systems. We are
                                            working with partner approved game sites and retailers to become a approved
                                            defence system, you can help by <a href="{{url('/register')}}">registering your support</a>.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fa fa-question-circle"></i> Does this cost, their must be some monetary gain?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p>
                                                PlayerCheck is free for everyone, it's maintained by the parent company of
                                                <a href="https://weaponcrates.com">Weaponcrates</a>,
                                                <a href="https://darkrhino.com">Dark Rhino Limited</a> we operate a few for-profit
                                                websites that cover the costs of servers and products.
                                            </p>
                                            <p>
                                                We required a way to validate sellers and buyers on our website. There
                                                was nothing available and without a system we could not contribute to
                                                the defence of the sport.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <i class="fa fa-question-circle"></i> What measures are in place for the data protection?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <p>
                                                We use reasonable administrative, logical, physical and managerial
                                                measures to safeguard your personal information against loss, theft
                                                and unauthorized access, use and modification. This includes the use
                                                of 184 bit cryptographic algorithm, SSL for both in transport layer and
                                                on rest api, 8 point authentication system and industry standard protocols.
                                            </p>
                                            <p>
                                                Unfortunately, no measures can be guaranteed to provide 100% security.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <i class="fa fa-question-circle"></i> How will players be verified?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p>
                                                We use the standard model for verification but with a digital twist. A
                                                player signs up to PlayerCheck, they apply for site membership via a form
                                                this notifies the site staff members, they review the membership via the
                                                site dashboard, after review they can accept or reject and leave a comment
                                                the user is then valid for a one year period. Unlike other models, players
                                                can apply to more then one site for membership.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                <i class="fa fa-question-circle"></i> How will you get the support of the sites and shops?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <p>
                                                We are hoping the idea of a advanced validation system that promotes better
                                                business and easier transactions, along with features like analytics and
                                                reports will bring game sites and retail stores on board with the other
                                                part being its free. We hope to also maintain a impartial review system
                                                later down the road.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSeven">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                <i class="fa fa-question-circle"></i> Will it be free for business to register or will there be an annual membership?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                        <div class="panel-body">
                                            <p>
                                                Its free, this will not change in the future but service charges may be
                                                applicable for features that incurred a charge. e.g. A custom QR sticker
                                                for site check in.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEight">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                <i class="fa fa-question-circle"></i> How does the current member number method not work with second hand sales?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                        <div class="panel-body">
                                            <p>
                                                That process is something that requires alot of manuel effort on behalf
                                                of the players, most of the time is ignored due to the complexity of having
                                                to run around to sites and stores to check if the person is vaild for the sake
                                                of a £100 sale. We aim to make it not only easy but safer to sell online.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingNine">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                <i class="fa fa-question-circle"></i> How are player to player checks done?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                        <div class="panel-body">
                                            <p>
                                                Currently you ask the other player to provide you with a "check code"
                                                this is a single use code generated for the player, you will then enter it
                                                into a request box. Once submitted the other players validation status,
                                                including generalized information will be visible to you for 72 hours.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFourteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                <i class="fa fa-question-circle"></i> How do I leave feedback about a transaction?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                                        <div class="panel-body">
                                            <p>
                                                After a successful "check code" is given you have 14 days to leave
                                                feedback, the other player has 14 days to dispute it then its is publicly
                                                visible on their account.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                <i class="fa fa-question-circle"></i> How do I find my profile?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                        <div class="panel-body">
                                            <p>
                                                Profiles are only visible once feedback is left, this is not a vaild proof
                                                of defence but a way for others to see your feedback.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEleven">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                <i class="fa fa-question-circle"></i> What if my site is not a member?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                        <div class="panel-body">
                                            <p>
                                                We understand this maybe problem currently if you can not find your local site,
                                                we provide a form to submit for use to contact them to get them on board.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwelve">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                <i class="fa fa-question-circle"></i> What if the retailer does not accept PlayerCheck?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                        <div class="panel-body">
                                            <p>
                                                We encourage you to ask them if they do, we also provide a form for you
                                                to submit details for us to contact them.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThirteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                <i class="fa fa-question-circle"></i> What if my game site or retail store is a member of another defence?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby=Thirteen>
                                        <div class="panel-body">
                                            <p>
                                                Unfortunately we still require you to submit the same details but we
                                                provide a way to display your membership to other defences groups and
                                                even update site members with their other defence ID/number.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="ibox">
                                <div class="ibox-content">
                                    <p>
                                        These are some questions that have been asked by the community.
                                        Got a question? <a href="mailto:hello@playercheck.co.uk">Email Us</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection