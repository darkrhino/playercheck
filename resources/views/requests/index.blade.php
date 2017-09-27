@extends('layouts.app')
@section('title', 'Requests')
@push('style')

@endpush

@section('content')
    <div class="pagehead explore-head">
        <div class="container">
            <nav class="underline-nav float-right" role="navigation" data-pjax="">

            </nav>
            <h1>
                <a class="pagehead-heading" href="{{route('requests.index')}}">
                    Requests
                </a>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-warning">
                    <i class="fa fa-info-circle"></i> All Keys Generated have a lifetime of 72 hours, you can
                    only have a max of 5 keys. Once claimed the key is locked to that user, be careful who you
                    send keys too as they can see basic information about you such as a name, age, partial
                    address and profile avatar. If users have left a rating on your account this will also be
                    provided.
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <button id="genRequest" class="btn btn-xs btn-default pull-right">Generate</button>
                        </div>
                        <h5>Generate Request Token</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="lds-css ng-scope text-center">
                            <img src="/img/Spinner.gif" alt="Spinner">
                        </div>
                        <div id="preFetch" class="alert alert-info" style="display: none;">
                            <i class="fa fa-info-circle"></i> You have no requests
                        </div>
                        <div id="postFetch" style="display: none;">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Claimed By</th>
                                        <th>Claimed At</th>
                                        <th>Generated</th>
                                        <th>Expires</th>
                                        <th>Feedback</th>
                                    </tr>
                                    </thead>
                                    <tbody id="fetchTable">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @role('staff123')
        <div class="row">
            <div class="col-xs-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Staff Code Testing</h5>
                    </div>
                    <div class="ibox-content">
                        {!! Form::open(['id' => 'staffCodeTest']) !!}
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input id="code" name="code" class="form-control" type="text" placeholder="Staff Code Testing">
                        </div>
                        <button class="btn btn-info btn-sm" type="submit">Test Code</button>
                        {!! Form::close() !!}
                        <div id="outputBox" class="well" style="display: none; margin-top: 5px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endrole
    </div>
@endsection

@push('scripts')
    <script>
        var genRequest = $('#genRequest'),
            preFetch = $('#preFetch'),
            spinner = $('.lds-css'),
            fetchTable = $('#fetchTable'),
            postFetch = $('#postFetch');

        function getRequests() {
            $.ajax({
                type: "get",
                url: '{{route('ajax.users.request.index')}}',
                success: function( msg ) {
                    console.log(msg);
                    spinner.hide();
                    if(msg.requests.length === 0){
                        preFetch.show();
                    }else{
                        postFetch.show();
                        $.each(msg.requests, function () {
                           fetchTable.append('<tr><td><input readonly class="form-control input-sm" value="'+ this.code +'"></td><td>'+ this.claimed_by +'</td><td>'+ this.claimed_at +'</td><td>'+ this.generated +'</td><td>'+ this.expires +'</td><td>'+ this.feedback +'</td></tr>')
                        });
                    }
                }
            });
        }

        genRequest.click(function () {
            $.ajax({
                type: "post",
                url: '{{route('ajax.users.request.store')}}',
                success: function( msg ) {
                    console.log(msg);
                    if(msg.swal_state === 'error'){
                        swal(msg.swal_title, msg.swal_body, msg.swal_state);
                    }else if(msg.swal_state === 'success'){
                        swal(msg.swal_title, msg.swal_body, msg.swal_state);
                        fetchTable.append('<tr><td><input readonly class="form-control input-sm" value="'+ msg.request.code +'"></td><td>'+ msg.request.claimed_by +'</td><td>'+ msg.request.claimed_at +'</td><td>'+ msg.request.generated +'</td><td>'+ msg.request.expires +'</td><td>'+ msg.request.feedback +'</td></tr>')
                    }
                }
            });
        })

        $(function () {
            getRequests();
        })
    </script>
    @role('staff')
    <script>
        var staffCodeTest = $('#staffCodeTest'),
            outputBox = $('#outputBox');

        staffCodeTest.submit(function(e){
            e.preventDefault();
            var data = {
                code: staffCodeTest.find('#code').val()
            };

            $.ajax({
                type: "post",
                url: '{{route('ajax.users.request.test')}}',
                data: data,
                success: function( msg ) {
                    console.log(msg);
                    outputBox.show();
                    outputBox.html( '<pre>' + this.msg +'</pre>');
                }
            });
        });
    </script>
    @endrole
@endpush