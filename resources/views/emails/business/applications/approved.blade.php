@extends('beautymail::templates.widgets')

@section('content')

    @include('beautymail::templates.widgets.articleStart')

    <h4 class="secondary"><strong>We have approved your business application.</strong></h4>
    <p><strong>{!! $business->name !!}</strong> is now a approved business on PlayerCheck.</p>
    <p>
        You can now access the business dashboard that will allow you create a retail store or site. Each retail store
        or Game Site requires a second approval but these are normally quicker.
    </p>
    <a style="border-radius: 4px;display: inline-block;font-weight: bold;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #171e24;background-color: #80bfc4;font-family: Ubuntu, sans-serif;font-size: 14px;line-height: 24px;padding: 12px 35px;" href="{{env('APP_URL')}}/business/" data-width="128">Visit Weaponcrates</a>
    <p><small>Please do not reply to this email.</small></p>
    @include('beautymail::templates.widgets.articleEnd')

@stop