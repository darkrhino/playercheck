@extends('layouts.dashboard.index')
@section('title', '')
@section('style')

@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="container">
            @include('control.static.notice')
            @foreach(Auth::user()->businesses as $business)
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <a class="btn btn-default pull-right" href="{{route('business.edit', $business->id)}}"><i class="fa fa-cog"></i></a>
                        <h2>{{$business->name}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="hidden-xs col-sm-3">
                                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iMTkycHgiIHN0eWxlPSJzaGFwZS1yZW5kZXJpbmc6Z2VvbWV0cmljUHJlY2lzaW9uOyB0ZXh0LXJlbmRlcmluZzpnZW9tZXRyaWNQcmVjaXNpb247IGltYWdlLXJlbmRlcmluZzpvcHRpbWl6ZVF1YWxpdHk7IGZpbGwtcnVsZTpldmVub2RkOyBjbGlwLXJ1bGU6ZXZlbm9kZCIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgODM0OSA4MzQ5IiB3aWR0aD0iMTkycHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+CiAgIDwhW0NEQVRBWwogICAgLmZpbDYge2ZpbGw6IzVENzE4Rn0KICAgIC5maWw1IHtmaWxsOiM2QjdGOUV9CiAgICAuZmlsMTEge2ZpbGw6IzgzQ0Y4Rn0KICAgIC5maWw0IHtmaWxsOiNDNkNCRDZ9CiAgICAuZmlsNyB7ZmlsbDojRTRFN0VEfQogICAgLmZpbDEge2ZpbGw6I0VDRjBGMX0KICAgIC5maWw4IHtmaWxsOiNGNzYzNUJ9CiAgICAuZmlsOSB7ZmlsbDojRkY3MDY5fQogICAgLmZpbDAge2ZpbGw6I0ZGRTM1Nn0KICAgIC5maWwzIHtmaWxsOndoaXRlfQogICAgLmZpbDIge2ZpbGw6I0M2Q0JENjtmaWxsLXJ1bGU6bm9uemVyb30KICAgIC5maWwxMCB7ZmlsbDp3aGl0ZTtmaWxsLXJ1bGU6bm9uemVyb30KICAgXV0+CiAgPC9zdHlsZT48L2RlZnM+PGcgaWQ9IkxheWVyX3gwMDIwXzEiPjxnIGlkPSJfNTAzODkxMTYwIj48Y2lyY2xlIGNsYXNzPSJmaWwwIiBjeD0iNDE3NCIgY3k9IjQxNzQiIHI9IjQxNzQiLz48cGF0aCBjbGFzcz0iZmlsMSIgZD0iTTE1NTQgMjMyMGw0MzU2IDAgMCA1NjUxYy01MjksMjQyIC0xMTE3LDM3NyAtMTczNiwzNzcgLTk5MiwwIC0xOTA0LC0zNDcgLTI2MjAsLTkyNWwwIC01MTAzeiIvPjxwYXRoIGNsYXNzPSJmaWwyIiBkPSJNMTk4MiA1NTQ4Yy0xNSwxMCAtMzUsNSAtNDUsLTEwIC0xMCwtMTUgLTUsLTM1IDEwLC00NWwxNjIwIC0xMDI1YzExLC03IDI1LC02IDM2LDFsMTYwMSAxMDQxYzE1LDEwIDE5LDMwIDEwLDQ1IC0xMCwxNSAtMzAsMTkgLTQ1LDEwbC0xNTg1IC0xMDMwIC0xNjAyIDEwMTR6Ii8+PHBvbHlnb24gY2xhc3M9ImZpbDMiIHBvaW50cz0iMTc0NSw1NDc3IDU0MjUsNTQ3NyA1NDI1LDY5NzAgMTc0NSw2OTcwICIvPjxnPjxwYXRoIGNsYXNzPSJmaWw0IiBkPSJNMTU1NCA0MTE1bDAgLTE1OTEgNDU2IDAgMCA5MTBjMCwzMjEgLTE5Myw1OTUgLTQ1Niw2ODF6Ii8+PHBhdGggY2xhc3M9ImZpbDQiIGQ9Ik0yMDEwIDI1MjRsMTI2NiAwIDAgOTEwYzAsOTM3IC0xMjY2LDkzNyAtMTI2NiwwbDAgLTkxMHoiLz48cGF0aCBjbGFzcz0iZmlsNCIgZD0iTTMyNzYgMjUyNGwxMjY2IDAgMCA5MTBjMCw5MzcgLTEyNjYsOTM3IC0xMjY2LDBsMCAtOTEweiIvPjxwYXRoIGNsYXNzPSJmaWw0IiBkPSJNNDU0MiAyNTI0bDEyNjYgMCAwIDkxMGMwLDkzNyAtMTI2Niw5MzcgLTEyNjYsMGwwIC05MTB6Ii8+PHBhdGggY2xhc3M9ImZpbDEiIGQ9Ik01OTEwIDI1MjRsMCAxMjk2Yy02NSwtMTExIC0xMDIsLTI0NCAtMTAyLC0zODZsMCAtOTEwIDEwMiAweiIvPjxwYXRoIGNsYXNzPSJmaWwxIiBkPSJNMTU1NCAyMzIwbDQ1MSAwYzIsNzIgMywxNDMgNCwyMTVsLTQ1NiAwIDAgLTIxNXoiLz48cGF0aCBjbGFzcz0iZmlsMSIgZD0iTTIwMDYgMjMyMGwxMjQxIDBjMTIsNzIgMjEsMTQzIDI5LDIxNSAtNDIzLDAgLTg0NCwwIC0xMjY2LDAgLTEsLTcyIC0zLC0xNDMgLTQsLTIxNXoiLz48cGF0aCBjbGFzcz0iZmlsMSIgZD0iTTMyNDYgMjMyMGwxMjQxIDBjMjEsNzIgNDAsMTQzIDU0LDIxNSAtNDIzLDAgLTg0NCwwIC0xMjY2LDAgLTgsLTcyIC0xOCwtMTQzIC0yOSwtMjE1eiIvPjxwYXRoIGNsYXNzPSJmaWwxIiBkPSJNNDQ4NyAyMzIwbDEyNDEgMGMzMSw3MiA1OCwxNDMgNzksMjE1IC00MjMsMCAtODQ0LDAgLTEyNjYsMCAtMTUsLTcyIC0zMywtMTQzIC01NCwtMjE1eiIvPjxwYXRoIGNsYXNzPSJmaWwxIiBkPSJNNTcyOCAyMzIwbDE4MyAwIDAgMjE1IC0xMDMgMGMtMjEsLTcyIC00OCwtMTQzIC03OSwtMjE1eiIvPjwvZz48cGF0aCBjbGFzcz0iZmlsNSIgZD0iTTE1NTQgMjMyMGwtMzczIDAgMCA0NzYzYzExNywxMjEgMjQyLDIzNSAzNzMsMzQxbDAgLTUxMDN6Ii8+PGc+PHBhdGggY2xhc3M9ImZpbDYiIGQ9Ik0xMTgxIDI1MjRsMCAxNTg0YzEyMSw0NSAyNTEsNDcgMzczLDdsMCAtMTU5MSAtMzczIDB6Ii8+PHBvbHlnb24gY2xhc3M9ImZpbDUiIHBvaW50cz0iMTU1NCwyMzIwIDExODEsMjMyMCAxMTgxLDI1MzUgMTU1NCwyNTM1ICIvPjwvZz48cGF0aCBjbGFzcz0iZmlsNSIgZD0iTTYyODQgMjMyMGwtMzczIDAgMCA1NjUxYzEyOCwtNTkgMjUzLC0xMjQgMzczLC0xOTVsMCAtNTQ1N3oiLz48Zz48cGF0aCBjbGFzcz0iZmlsNiIgZD0iTTU5MTAgMjUyNGwwIDEyOTZjODUsMTQ3IDIxOCwyNTcgMzczLDMwMWwwIC0xNTk3IC0zNzMgMHoiLz48cG9seWdvbiBjbGFzcz0iZmlsNSIgcG9pbnRzPSI2Mjg0LDIzMjAgNTkxMCwyMzIwIDU5MTAsMjUzNSA2Mjg0LDI1MzUgIi8+PC9nPjxwYXRoIGNsYXNzPSJmaWwxIiBkPSJNMTE4MSAyMzIwbC03NDcgMGMtMjc3LDU1OSAtNDM0LDExODggLTQzNCwxODU0IDAsMTEzMSA0NTAsMjE1NyAxMTgxLDI5MDlsMCAtNDc2M3oiLz48Zz48cGF0aCBjbGFzcz0iZmlsNCIgZD0iTTQzOSAyNTI0bDMwNSAwIDAgOTEwYzAsMzkwIC0yODUsNzA5IC02MzMsNzA5bDAgMGMtMzUsMCAtNzAsLTMgLTEwNCwtMTAgMzUsLTU3NiAxODYsLTExMjAgNDMxLC0xNjEweiIvPjxwYXRoIGNsYXNzPSJmaWw0IiBkPSJNMTE4MSA0MTA4bDAgLTE1ODQgLTQzNiAwIDAgOTEwYzAsMzEzIDE4NCw1ODEgNDM2LDY3NHoiLz48cGF0aCBjbGFzcz0iZmlsMSIgZD0iTTc2NSAyMzIwbC0yMTcgMGMtNDAsNzAgLTc4LDE0MiAtMTE1LDIxNWwzMTAgMGM2LC03MiAxMywtMTQzIDIxLC0yMTV6Ii8+PHBhdGggY2xhc3M9ImZpbDEiIGQ9Ik0xMTgxIDIzMjBsLTQxNiAwYy04LDcyIC0xNSwxNDMgLTIxLDIxNWw0MzcgMCAwIC0yMTV6Ii8+PC9nPjxnPjxwYXRoIGNsYXNzPSJmaWw3IiBkPSJNNDM5IDIzMDlsMzA1IDAgMCA5MTBjMCwzOTAgLTI4NSw3MDkgLTYzMyw3MDlsMCAwYy0zNSwwIC03MCwtMyAtMTA0LC0xMCAzNSwtNTc2IDE4NiwtMTEyMCA0MzEsLTE2MTB6Ii8+PHBhdGggY2xhc3M9ImZpbDgiIGQ9Ik03NDUgMjMwOWwxMjY2IDAgMCA5MTBjMCwzOTAgLTI4NSw3MDkgLTYzMyw3MDlsMCAwYy0zNDgsMCAtNjMzLC0zMTkgLTYzMywtNzA5bDAgLTkxMHoiLz48cGF0aCBjbGFzcz0iZmlsNyIgZD0iTTIwMTAgMjMwOWwxMjY2IDAgMCA5MTBjMCwzOTAgLTI4NSw3MDkgLTYzMyw3MDlsMCAwYy0zNDgsMCAtNjMzLC0zMTkgLTYzMywtNzA5bDAgLTkxMHoiLz48cGF0aCBjbGFzcz0iZmlsOCIgZD0iTTMyNzYgMjMwOWwxMjY2IDAgMCA5MTBjMCwzOTAgLTI4NSw3MDkgLTYzMyw3MDlsMCAwYy0zNDgsMCAtNjMzLC0zMTkgLTYzMywtNzA5bDAgLTkxMHoiLz48cGF0aCBjbGFzcz0iZmlsNyIgZD0iTTQ1NDIgMjMwOWwxMjY2IDAgMCA5MTBjMCwzOTAgLTI4NSw3MDkgLTYzMyw3MDlsMCAwYy0zNDgsMCAtNjMzLC0zMTkgLTYzMywtNzA5bDAgLTkxMHoiLz48cGF0aCBjbGFzcz0iZmlsOCIgZD0iTTU4MDggMjMwOWwxMjY2IDAgMCA5MTBjMCwzOTAgLTI4NSw3MDkgLTYzMyw3MDlsMCAwYy0zNDgsMCAtNjMzLC0zMTkgLTYzMywtNzA5bDAgLTkxMHoiLz48cGF0aCBjbGFzcz0iZmlsMyIgZD0iTTgyOSAxNjc3Yy0zOSwyMTQgLTY4LDQyOSAtODUsNjQzbC0zMTAgMGMxMTMsLTIyNyAyNDUsLTQ0MiAzOTUsLTY0M3oiLz48cGF0aCBjbGFzcz0iZmlsOSIgZD0iTTE5NTEgNjQxYzUsMTM4IDExLDI3NyAxOCw0MTUgMjAsNDIxIDM0LDg0MyA0MSwxMjY0IC00MjMsMCAtODQ0LDAgLTEyNjYsMCAxNywtMjE0IDQ2LC00MjkgODUsLTY0MyAzMDcsLTQxMCA2ODcsLTc2MiAxMTIyLC0xMDM2eiIvPjxwYXRoIGNsYXNzPSJmaWwzIiBkPSJNMjc0NSAyNTFjNTcsMjY4IDEzNiw1MzcgMjI4LDgwNSAxNDUsNDIyIDI1Niw4NDMgMzAzLDEyNjQgLTQyMywwIC04NDQsMCAtMTI2NiwwIC03LC00MjEgLTIxLC04NDMgLTQxLC0xMjY0IC03LC0xMzggLTEzLC0yNzYgLTE4LC00MTUgMjQ4LC0xNTcgNTE0LC0yODggNzk0LC0zOTB6Ii8+PHBhdGggY2xhc3M9ImZpbDkiIGQ9Ik0zNDgyIDU3YzEwNywzMzMgMjgxLDY2NiA0OTUsOTk5IDI3MCw0MjEgNDc3LDg0MyA1NjQsMTI2NCAtNDIzLDAgLTg0NCwwIC0xMjY2LDAgLTQ3LC00MjEgLTE1OCwtODQzIC0zMDMsLTEyNjQgLTkyLC0yNjggLTE3MSwtNTM2IC0yMjgsLTgwNSAyMzcsLTg2IDQ4MywtMTUyIDczOCwtMTk0eiIvPjxwYXRoIGNsYXNzPSJmaWwzIiBkPSJNNDIzMyAxYzE1MiwzNTIgNDE5LDcwMyA3NDksMTA1NSAzOTYsNDIxIDY5OCw4NDMgODI1LDEyNjQgLTQyMywwIC04NDQsMCAtMTI2NiwwIC04NywtNDIxIC0yOTQsLTg0MyAtNTY0LC0xMjY0IC0yMTQsLTMzMyAtMzg4LC02NjYgLTQ5NSwtOTk5IDIyNSwtMzggNDU2LC01NyA2OTIsLTU3IDIwLDAgMzksMSA1OSwxeiIvPjxwYXRoIGNsYXNzPSJmaWw5IiBkPSJNNTA1OCA5NGMyMDcsMzIxIDUzNCw2NDEgOTMwLDk2MiA1MjEsNDIxIDkyMCw4NDMgMTA4NiwxMjY0IC00MjMsMCAtODQ1LDAgLTEyNjcsMCAtMTI3LC00MjEgLTQyOSwtODQzIC04MjUsLTEyNjQgLTMzMSwtMzUyIC01OTcsLTcwMyAtNzQ5LC0xMDU1IDI4Myw0IDU1OSwzNiA4MjUsOTN6Ii8+PC9nPjxwb2x5Z29uIGNsYXNzPSJmaWw5IiBwb2ludHM9IjIwMTYsNTU4NyA1MTUzLDU1ODcgNTE1Myw2ODYwIDIwMTYsNjg2MCAiLz48Y2lyY2xlIGNsYXNzPSJmaWwzIiBjeD0iMzU4NSIgY3k9IjQ0OTYiIHI9IjIwMyIvPjxwYXRoIGNsYXNzPSJmaWwxMCIgZD0iTTI1NTggNjQ4N2MwLDMyIDcsNTUgMjEsNjggMTQsMTMgMzIsMjAgNTYsMjAgMjMsMCA0MiwtNyA1NiwtMjAgMTQsLTEzIDIxLC0zNiAyMSwtNjhsMCAtNDgzYzAsLTMyIC03LC01NSAtMjEsLTY4IC0xNCwtMTMgLTMyLC0yMCAtNTYsLTIwIC0yMywwIC00Miw3IC01NiwyMCAtMTQsMTMgLTIxLDM2IC0yMSw2OGwwIDQ4M3ptLTE0NyAtNDc0YzAsLTcyIDE5LC0xMjggNTgsLTE2NyAzOCwtMzkgOTQsLTU4IDE2NiwtNTggNzIsMCAxMjgsMTkgMTY2LDU4IDM4LDM5IDU4LDk0IDU4LDE2N2wwIDQ2NWMwLDcyIC0xOSwxMjggLTU4LDE2NyAtMzgsMzkgLTk0LDU4IC0xNjYsNTggLTcyLDAgLTEyOCwtMTkgLTE2NiwtNTggLTM4LC0zOSAtNTgsLTk0IC01OCwtMTY3bDAgLTQ2NXptODcxIC0yMTVjNzQsMCAxMjksMTkgMTY1LDU2IDM2LDM3IDU0LDkyIDU0LDE2NWwwIDExNmMwLDcyIC0xOCwxMjcgLTU0LDE2NSAtMzYsMzcgLTkxLDU2IC0xNjUsNTZsLTcwIDAgMCAzMzYgLTE0NyAwIDAgLTg5NCAyMTcgMHptLTcwIDEyOGwwIDMwMyA3MCAwYzIzLDAgNDEsLTYgNTQsLTE4IDEyLC0xMiAxOSwtMzQgMTksLTY2bDAgLTEzNGMwLC0zMiAtNiwtNTQgLTE5LC02NiAtMTMsLTEyIC0zMCwtMTggLTU0LC0xOGwtNzAgMHptNjI0IDI0OWwyMDIgMCAwIDEyOCAtMjAyIDAgMCAyNjIgMjU0IDAgMCAxMjggLTQwMiAwIDAgLTg5NCA0MDIgMCAwIDEyOCAtMjU0IDAgMCAyNDl6bTU4OSAtMTMwbDAgNjQ4IC0xMzMgMCAwIC04OTQgMTg1IDAgMTUxIDUzNSAwIC01MzUgMTMxIDAgMCA4OTQgLTE1MSAwIC0xODMgLTY0OHoiLz48Y2lyY2xlIGNsYXNzPSJmaWwxMSIgY3g9IjM1ODUiIGN5PSI0NDk2IiByPSIxNDgiLz48cGF0aCBjbGFzcz0iZmlsNCIgZD0iTTE5MDEgNTUzMGMyNywwIDQ4LDIyIDQ4LDQ4IDAsMjcgLTIyLDQ4IC00OCw0OCAtMjcsMCAtNDgsLTIyIC00OCwtNDggMCwtMjcgMjIsLTQ4IDQ4LC00OHptMzM2OCAwYzI3LDAgNDgsMjIgNDgsNDggMCwyNyAtMjIsNDggLTQ4LDQ4IC0yNywwIC00OCwtMjIgLTQ4LC00OCAwLC0yNyAyMiwtNDggNDgsLTQ4eiIvPjwvZz48L2c+PC9zdmc+"
                                         draggable="false" class="img-responsive" style="opacity: 0.5">
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <h2>Apply to open a retail store</h2>
                                    <a href="{{route('control.store.create', $business->id)}}" class="btn btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        @if($business->stores->count() > 0)
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Project </th>
                                        <th>Name </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($business->stores as $store)
                                    <tr>
                                        <td><a href="{{route('control.store.show', $store->slug)}}">{!! $store->name !!}</a></td>
                                        <td>Project <small>This is example of project</small></td>
                                        <td>Patrick Smith</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="hidden-xs col-sm-3">
                                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDUxMiA1MTIiIGhlaWdodD0iNTEycHgiIGlkPSJDYWxxdWVfMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48Zz48Zz48ZGVmcz48cGF0aCBkPSJNNTEyLDI1NmMwLDE0MS4zOTItMTE0LjYwNCwyNTUuOTk2LTI1Ni4wMDQsMjU1Ljk5NkMxMTQuNjA0LDUxMS45OTYsMCwzOTcuMzkyLDAsMjU2ICAgICBDMCwxMTQuNjIzLDExNC42MDQsMC4wMDQsMjU1Ljk5NiwwLjAwNEMzOTcuMzk2LDAuMDA0LDUxMiwxMTQuNjIzLDUxMiwyNTZ6IiBpZD0iU1ZHSURfMV8iLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF8yXyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzFfIi8+PC9jbGlwUGF0aD48ZyBjbGlwLXBhdGg9InVybCgjU1ZHSURfMl8pIj48cGF0aCBkPSJNLTYuMDc2LDQ3NS43ODRjMCwyNC43MjgsMjAuMDc2LDQ0Ljc0Miw0NC43ODcsNDQuNzQyaDIyNi4xOTRMLTYuMDc2LDIyMy4xOTdWNDc1Ljc4NHoiIGZpbGw9IiM2QUFEREEiLz48cGF0aCBkPSJNMjI3Ljk5NywxNDkuOTQxTDI5MC44NTItMS41OTVIMzguNzExQzE0LTEuNTk1LTYuMDc2LDE4LjQ0My02LjA3Niw0My4xNDd2MjUyLjU0OWw4NC41NzUsNDEuOTcgICAgIEwyMjcuOTk3LDE0OS45NDF6IiBmaWxsPSIjQUJDMjZFIi8+PHBhdGggZD0iTTUwOS4wOTEtMS41OTVIMzE2LjYwOUw4Ny4xNSwzNDQuMTVjMCwwLDkyLjkzOCw4Ni40NjgsMTczLjY5NCwxNzYuMzc2aDI0OC4yNDYgICAgIGMyNC43MjgsMCw0NC43MjctMjAuMDE1LDQ0LjcyNy00NC43NDJWNDMuMTQ3QzU1My44MTcsMTguNDQzLDUzMy44MTgtMS41OTUsNTA5LjA5MS0xLjU5NXoiIGZpbGw9IiNDNkE5NjMiLz48cG9seWdvbiBmaWxsPSIjRkRGNUE4IiBwb2ludHM9IjI2MC43MDgsNTIwLjUyNiAzNjIuMjQ0LDUyMC41MjYgLTYuMDc2LDI3Ny4xNTEgLTYuMDc2LDM0NC4yNzEgICAgIi8+PHBvbHlnb24gZmlsbD0iI0ZERjVBOCIgcG9pbnRzPSIyODEuMzY3LC0zLjEwMyA0NS45ODQsMzE5LjkzOCAxMDEuNzEsMzYyLjMwMiAzNjguMDAyLC0zLjEwMyAgICAiLz48L2c+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTUwNi02My42MzlIMzAwLjE4NUwyNjEuNDk2LDEuMDk1bC03LDM3Ni4wNTVoMjk5LjMyMVYtMTAuNDc0ICAgIEM1NTMuODE3LTM5LjgyOSw1MzIuNDI0LTYzLjYzOSw1MDYtNjMuNjM5eiIgZmlsbD0iI0E5N0M1MCIgb3BhY2l0eT0iMC40NCIvPjwvZz48Zz48cmVjdCBmaWxsPSIjRjE1RTRBIiBoZWlnaHQ9IjE1My4wMjgiIHdpZHRoPSIxNjUuNjg3IiB4PSIxNzMuMTY0IiB5PSIxMzUuNzkiLz48cG9seWdvbiBmaWxsPSIjRjE1RTRBIiBwb2ludHM9IjI1NS45OTYsMzc2LjIyNiAzMjQuMTg1LDI1Ny4yODggMTg3LjgzLDI1Ny4yODggICAiLz48Zz48cG9seWdvbiBmaWxsPSIjQkY0MjMwIiBwb2ludHM9IjIwNy43NTQsMjQ0LjYyMSAyMjYuMjcsMjQ0LjUxNiAyNTUuNjAyLDI5Ny43NTcgMjg0LjY0LDI0NC45MDkgMzA0LjI0NSwyNDQuODc5ICAgICAgMzA0LjA5NCwxNzEuMzM0IDIwNy45MDYsMTcxLjMzNCAgICAiLz48cGF0aCBkPSJNMjU1LjYwMiwzMTcuNDk5bC0zNC45MzktNjMuNDM4bC0yMi40MDksMC4xMjFsMC4xNTItOTIuMzQ3aDExNS4yMDNsMC4xNTEsOTIuNTQ0bC0yMy40ODUsMC4wMyAgICAgTDI1NS42MDIsMzE3LjQ5OXogTTIzMS44NzUsMjM0Ljk3bDIzLjcyNyw0My4wNDVsMjMuNDAyLTQyLjYwNWwxNS42OTYtMC4wM2wtMC4wOTEtNTQuNTI5aC03Ny4yMTlsLTAuMDkxLDU0LjE5NkwyMzEuODc1LDIzNC45NyAgICAgeiIgZmlsbD0iI0ZGRkZGRiIvPjwvZz48cmVjdCBmaWxsPSIjOTQzNTI4IiBoZWlnaHQ9IjEzLjc0MiIgd2lkdGg9Ijc3LjA5OCIgeD0iMjE3LjU0MiIgeT0iMTgwLjkxIi8+PC9nPjwvZz48Zy8+PGcvPjxnLz48Zy8+PGcvPjxnLz48L3N2Zz4="
                                         draggable="false" class="img-responsive" style="opacity: 0.5">
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <h2>Create a Game site</h2>
                                    <a href="{{route('control.site.create')}}" class="btn btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('script')
@endsection