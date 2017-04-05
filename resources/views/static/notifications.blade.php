<script>
    @if(Session::has('success'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Congratulations');

            }, 1300);
    @endif
    @if(Session::has('reportSuccess'))
        setTimeout(function() {
        toastr.options = {
            showMethod: 'slideDown',
            positionClass: "toast-bottom-right",
            timeOut: 4000
        };
        toastr.warning('We will take a look into it.', 'Reported');

    }, 1300);
    @endif
    @if(Session::has('asked'))
        setTimeout(function() {
        toastr.options = {
            showMethod: 'slideDown',
            positionClass: "toast-bottom-right",
            timeOut: 4000
        };
        toastr.success('Question Asked', 'Thanks for asking');

    }, 1300);
    @endif
    @if(Session::has('error'))
        setTimeout(function() {
        toastr.options = {
            showMethod: 'slideDown',
            positionClass: "toast-bottom-right",
            timeOut: 4000
        };
        toastr.error('Error', 'There was an error!');

    }, 1300);
    @endif
    @if(Session::has('requestSent'))
        setTimeout(function() {
        toastr.options = {
            showMethod: 'slideDown',
            positionClass: "toast-bottom-right",
            timeOut: 4000
        };
        toastr.success('Woohoo', 'Friend Request Sent');

    }, 1300);
    @endif
    @if(Session::has('requestRemoved'))
        setTimeout(function() {
        toastr.options = {
            showMethod: 'slideDown',
            positionClass: "toast-bottom-right",
            timeOut: 4000
        };
        toastr.success('Removed', 'You are no longer friends');

    }, 1300);
    @endif
    @if(Session::has('requestAccepted'))
        setTimeout(function() {
        toastr.options = {
            showMethod: 'slideDown',
            positionClass: "toast-bottom-right",
            timeOut: 4000
        };
        toastr.success('Buddies!', 'You are now friends');

    }, 1300);
    @endif
    @if(Session::has('requestRejected'))
        setTimeout(function() {
        toastr.options = {
            showMethod: 'slideDown',
            positionClass: "toast-bottom-right",
            timeOut: 4000
        };
        toastr.success('Bye Bye', 'Friend Request Rejected');

    }, 1300);
    @endif
    @if(Session::has('bumped'))
        setTimeout(function() {
        toastr.options = {
            showMethod: 'slideDown',
            positionClass: "toast-bottom-right",
            timeOut: 4000
        };
        toastr.success('Item Bumped Successfully', 'Bumped');

    }, 1300);
    @endif
    @if(Session::has('reindexed'))
        setTimeout(function() {
        toastr.options = {
            showMethod: 'slideDown',
            positionClass: "toast-bottom-right",
            timeOut: 4000
        };
        toastr.success('Items Reindexed Successfully', 'Reindexed');

    }, 1300);
    @endif
    @if(Session::has('ticketOpen'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Ticket set to open');

            }, 1300);
    @endif
    @if(Session::has('ticketOnHold'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Ticket set to on hold');

            }, 1300);
    @endif
    @if(Session::has('ticketInProgress'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Ticket set to in progress');

            }, 1300);
    @endif
    @if(Session::has('ticketAwaitingReply'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Ticket set to awaiting reply');

            }, 1300);
    @endif
    @if(Session::has('confirmedLeave'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Leave has been confirmed');

            }, 1300);
    @endif
    @if(Session::has('rejectedLeave'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Leave has been rejected');

            }, 1300);
    @endif
    @if(Session::has('ticketClosed'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Ticket has been closed');

            }, 1300);
    @endif
    @if(Session::has('ticketAssigned'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Ticket has been assigned');

            }, 1300);
    @endif
    @if(Session::has('ticketCreated'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Ticket has been created');

            }, 1300);
    @endif
    @if(Session::has('ticketDeleted'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'Ticket has been deleted');

            }, 1300);
    @endif
    @if(Session::has('updated'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'We updated them records');

            }, 1300);
    @endif
    @if(Session::has('deleted'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.warning('Deleted', 'We have removed it.');

            }, 1300);
    @endif
    @if(Session::has('warning'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.warning('Oh!', 'Something Wasn\'t Right!');

            }, 1300);
    @endif
    @if(Session::has('failed'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 8000
                };
                toastr.error('Failed', 'Something was incorrect.');

            }, 1300);
    @endif
    @if(Session::has('login'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 8000
                };
                toastr.success('', 'Welcome Back');

            }, 1300);
    @endif
    @if(Session::has('logout'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 8000
                };
                toastr.success('We are going to miss you :(', 'Come Back Soon!');

            }, 1300);
    @endif
    @if(Session::has('notauth'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 8000
                };
                toastr.warning('You are not Authorized', 'Warning!');

            }, 1300);
    @endif
    @if(Session::has('fPassword'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.error('Error', 'Password was not updated!');

            }, 1300);
    @endif
    @if(Session::has('sent'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Sent', 'Email has been launched');

            }, 1300);
    @endif
    @if(Session::has('confirmed'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Validated', 'Your Email is now Validated!');

            }, 1300);
    @endif
    @if(Session::has('sold'))
        setTimeout(function() {
                toastr.options = {
                    showMethod: 'slideDown',
                    positionClass: "toast-bottom-right",
                    timeOut: 4000
                };
                toastr.success('Success', 'You just sold an item');

            }, 1300);
    @endif
</script>