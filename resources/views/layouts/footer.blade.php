<section class="backToTop">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="#">Back to Top</a>
            </div>
        </div>
    </div>
</section>
<footer class="Footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="logo logo--light">Career Penguin</h1>
                <p class="description">
                    A career site built for you to find the coolest places to work.
                </p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h5 class="heading">Popular Job Markets</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Logistics</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h5 class="heading">Community</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Forums</a></li>
                    <li><a href="#">Facebook Group</a></li>
                    <li><a href="#">Linkedin Group</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h5 class="heading">Extras</h5>
                <ul class="list-unstyled">
                    <li><a href="{{route('recruiter.index')}}">Recruiting</a></li>
                    <li><a href="{{route('upgrade.index')}}">Upgrade</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h5 class="heading">Social</h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/careerpenguin/" target="new">Facebook</a></li>
                    <li><a href="#" target="new">Linkedin</a></li>
                    <li><a href="https://twitter.com/career_penguin" target="new">Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<section class="Footer-Secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-12">
                        <p>&copy; Career Penguin 2015 - {{\Carbon\Carbon::now()->format('Y')}}. All rights reserved</p>
                        <p><small>We hold no responsibility for listings or advice on this site.</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <div class="fb-like" data-href="https://www.facebook.com/careerpenguin/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                {!! Form::open(['route' => 'search.find']) !!}
                <label for="term" class="sr-only">Search</label>
                <input type="text" class="form-control" name="term" id="term"
                       placeholder="Quick Search">
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>