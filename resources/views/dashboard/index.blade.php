@extends('layouts.app')
@section('title', 'Dashboard')
@section('style')

@endsection

@section('content')
    <div role="main">
        <div class="pagehead explore-head">
            <div class="container">
                <nav class="underline-nav float-right" role="navigation" data-pjax="">

                </nav>
                <h1>
                    <a class="pagehead-heading" href="{{route('dashboard.index')}}">
                        Dashboard
                    </a>
                </h1>
            </div>
        </div>
        <div class="explore-pjax-container explore-page">

            <div class="explore-section" id="explore-featured">
                <div class="container">
                    <div class="explore-marketing-header">
                        <h2>Welcome to the Dashboard</h2>
                        <p class="lead mb-3">See your requests at a glance and how you can increase your safety when trading online.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="exploregrid gut-md">
                                <li class="col-12 mb-12 exploregrid-item-wrap">
                                    <a href="{{route('requests.index')}}" class="exploregrid-item px-4 pt-5 pb-6">
                                        <div class="exploregrid-item-header" style="background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDUiIGhlaWdodD0iMTY3Ij48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoNDYsIDIxNCwgMTkxKSIgIC8+PHJlY3QgeD0iLTE1LjMzMzMzMzMzMzMzMzMzNCIgeT0iLTE1LjMzMzMzMzMzMzMzMzMzNCIgd2lkdGg9IjMwLjY2NjY2NjY2NjY2NjY2OCIgaGVpZ2h0PSIzMC42NjY2NjY2NjY2NjY2NjgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMzMzNCIgc3Ryb2tlLXdpZHRoPSIxIiAgLz48cmVjdCB4PSIxMjkuNzgyODkxNDMyMTEyMjIiIHk9Ii0xNS4zMzMzMzMzMzMzMzMzMzQiIHdpZHRoPSIzMC42NjY2NjY2NjY2NjY2NjgiIGhlaWdodD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMzMzQiIHN0cm9rZS13aWR0aD0iMSIgIC8+PHJlY3QgeD0iLTE1LjMzMzMzMzMzMzMzMzMzNCIgeT0iMTUyLjIzMjQ0OTUzMDg5MTEzIiB3aWR0aD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBoZWlnaHQ9IjMwLjY2NjY2NjY2NjY2NjY2OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzMzM0IiBzdHJva2Utd2lkdGg9IjEiICAvPjxyZWN0IHg9IjEyOS43ODI4OTE0MzIxMTIyMiIgeT0iMTUyLjIzMjQ0OTUzMDg5MTEzIiB3aWR0aD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBoZWlnaHQ9IjMwLjY2NjY2NjY2NjY2NjY2OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzMzM0IiBzdHJva2Utd2lkdGg9IjEiICAvPjxyZWN0IHg9IjU3LjIyNDc3OTA0OTM4OTQ1NCIgeT0iMjYuNTU4MTEyMzgyNzIyNzg2IiB3aWR0aD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBoZWlnaHQ9IjMwLjY2NjY2NjY2NjY2NjY2OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzMzM0IiBzdHJva2Utd2lkdGg9IjEiICAvPjxyZWN0IHg9Ii0xNS4zMzMzMzMzMzMzMzMzMzQiIHk9IjY4LjQ0OTU1ODA5ODc3ODkxIiB3aWR0aD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBoZWlnaHQ9IjMwLjY2NjY2NjY2NjY2NjY2OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjEwNjY2NjY2NjY2NjY2NjY3IiBzdHJva2Utd2lkdGg9IjEiICAvPjxyZWN0IHg9IjEyOS43ODI4OTE0MzIxMTIyMiIgeT0iNjguNDQ5NTU4MDk4Nzc4OTEiIHdpZHRoPSIzMC42NjY2NjY2NjY2NjY2NjgiIGhlaWdodD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjY2NjciIHN0cm9rZS13aWR0aD0iMSIgIC8+PHJlY3QgeD0iNTcuMjI0Nzc5MDQ5Mzg5NDU0IiB5PSIxMTAuMzQxMDAzODE0ODM1MDMiIHdpZHRoPSIzMC42NjY2NjY2NjY2NjY2NjgiIGhlaWdodD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDcyMDAwMDAwMDAwMDAwMDEiIHN0cm9rZS13aWR0aD0iMSIgIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMjYuNTU4MTEyMzgyNzIyNzg2LCAxNS4zMzMzMzMzMzMzMzMzMzQsIDAsIDMwLjY2NjY2NjY2NjY2NjY2OCwgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA3MjAwMDAwMDAwMDAwMDAxIiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE1LjMzMzMzMzMzMzMzMzMzNCwgLTE1LjMzMzMzMzMzMzMzMzMzNCkgcm90YXRlKDAsIDE1LjMzMzMzMzMzMzMzMzMzNCwgMTMuMjc5MDU2MTkxMzYxMzkzKSIgIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMjYuNTU4MTEyMzgyNzIyNzg2LCAxNS4zMzMzMzMzMzMzMzMzMzQsIDAsIDMwLjY2NjY2NjY2NjY2NjY2OCwgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA3MjAwMDAwMDAwMDAwMDAxIiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE1LjMzMzMzMzMzMzMzMzMzNCwgMTgyLjg5OTExNjE5NzU1NzgyKSByb3RhdGUoMCwgMTUuMzMzMzMzMzMzMzMzMzM0LCAxMy4yNzkwNTYxOTEzNjEzOTMpIHNjYWxlKDEsIC0xKSIgIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMjYuNTU4MTEyMzgyNzIyNzg2LCAxNS4zMzMzMzMzMzMzMzMzMzQsIDAsIDMwLjY2NjY2NjY2NjY2NjY2OCwgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzMzM0IiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyOS43ODI4OTE0MzIxMTIyMiwgLTE1LjMzMzMzMzMzMzMzMzMzNCkgcm90YXRlKDAsIDE1LjMzMzMzMzMzMzMzMzMzNCwgMTMuMjc5MDU2MTkxMzYxMzkzKSBzY2FsZSgtMSwgMSkiICAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDI2LjU1ODExMjM4MjcyMjc4NiwgMTUuMzMzMzMzMzMzMzMzMzM0LCAwLCAzMC42NjY2NjY2NjY2NjY2NjgsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMzMzNCIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjkuNzgyODkxNDMyMTEyMjIsIDE4Mi44OTkxMTYxOTc1NTc4Mikgcm90YXRlKDAsIDE1LjMzMzMzMzMzMzMzMzMzNCwgMTMuMjc5MDU2MTkxMzYxMzkzKSBzY2FsZSgtMSwgLTEpIiAgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAyNi41NTgxMTIzODI3MjI3ODYsIDE1LjMzMzMzMzMzMzMzMzMzNCwgMCwgMzAuNjY2NjY2NjY2NjY2NjY4LCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjY2NjciIHN0cm9rZS13aWR0aD0iMSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODcuODkxNDQ1NzE2MDU2MTEsIDI2LjU1ODExMjM4MjcyMjc4NikiICAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDI2LjU1ODExMjM4MjcyMjc4NiwgMTUuMzMzMzMzMzMzMzMzMzM0LCAwLCAzMC42NjY2NjY2NjY2NjY2NjgsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMzczMzMzMzMzMzMzMzMzMyIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1Ny4yMjQ3NzkwNDkzODk0NSwgMjYuNTU4MTEyMzgyNzIyNzg2KSBzY2FsZSgtMSwgMSkiICAvPjxwb2x5bGluZSBwb2ludHM9IjAsIDAsIDI2LjU1ODExMjM4MjcyMjc4NiwgMTUuMzMzMzMzMzMzMzMzMzM0LCAwLCAzMC42NjY2NjY2NjY2NjY2NjgsIDAsIDAiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIwMDAwMDAwMDAwMDAwMSIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4Ny44OTE0NDU3MTYwNTYxMSwgMTQxLjAwNzY3MDQ4MTUwMTcpIHNjYWxlKDEsIC0xKSIgIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMjYuNTU4MTEyMzgyNzIyNzg2LCAxNS4zMzMzMzMzMzMzMzMzMzQsIDAsIDMwLjY2NjY2NjY2NjY2NjY2OCwgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjE0MTMzMzMzMzMzMzMzMzM0IiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDU3LjIyNDc3OTA0OTM4OTQ1LCAxNDEuMDA3NjcwNDgxNTAxNykgc2NhbGUoLTEsIC0xKSIgIC8+PHBvbHlsaW5lIHBvaW50cz0iMCwgMCwgMjYuNTU4MTEyMzgyNzIyNzg2LCAxNS4zMzMzMzMzMzMzMzMzMzQsIDAsIDMwLjY2NjY2NjY2NjY2NjY2OCwgMCwgMCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY2NjY1IiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE1LjMzMzMzMzMzMzMzMzMzNCwgNjguNDQ5NTU4MDk4Nzc4OTEpIiAgLz48cG9seWxpbmUgcG9pbnRzPSIwLCAwLCAyNi41NTgxMTIzODI3MjI3ODYsIDE1LjMzMzMzMzMzMzMzMzMzNCwgMCwgMzAuNjY2NjY2NjY2NjY2NjY4LCAwLCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDk4IiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyOS43ODI4OTE0MzIxMTIyMiwgNjguNDQ5NTU4MDk4Nzc4OTEpIHNjYWxlKC0xLCAxKSIgIC8+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjMwLjY2NjY2NjY2NjY2NjY2OCIgaGVpZ2h0PSIzMC42NjY2NjY2NjY2NjY2NjgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xNSIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNS4zMzMzMzMzMzMzMzMzMzQsIDE1LjMzMzMzMzMzMzMzMzMzNCkgcm90YXRlKC0zMCwgMCwgMCkiICAvPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIzMC42NjY2NjY2NjY2NjY2NjgiIGhlaWdodD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTQxMzMzMzMzMzMzMzMzMzQiIHN0cm9rZS13aWR0aD0iMSIgdHJhbnNmb3JtPSJzY2FsZSgtMSwgMSkgdHJhbnNsYXRlKC0xMjkuNzgyODkxNDMyMTEyMjIsIDE1LjMzMzMzMzMzMzMzMzMzNCkgcm90YXRlKC0zMCwgMCwgMCkiICAvPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIzMC42NjY2NjY2NjY2NjY2NjgiIGhlaWdodD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDg5MzMzMzMzMzMzMzMzMzMiIHN0cm9rZS13aWR0aD0iMSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTUuMzMzMzMzMzMzMzMzMzM0LCAzNy43ODI4OTE0MzIxMTIyNCkgcm90YXRlKDMwLCAwLCAzMC42NjY2NjY2NjY2NjY2NjgpIiAgLz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBoZWlnaHQ9IjMwLjY2NjY2NjY2NjY2NjY2OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA3MjAwMDAwMDAwMDAwMDAxIiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0ic2NhbGUoLTEsIDEpIHRyYW5zbGF0ZSgtMTI5Ljc4Mjg5MTQzMjExMjIyLCAzNy43ODI4OTE0MzIxMTIyNCkgcm90YXRlKDMwLCAwLCAzMC42NjY2NjY2NjY2NjY2NjgpIiAgLz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMzAuNjY2NjY2NjY2NjY2NjY4IiBoZWlnaHQ9IjMwLjY2NjY2NjY2NjY2NjY2OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjAyIiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0ic2NhbGUoMSwgLTEpIHRyYW5zbGF0ZSgxNS4zMzMzMzMzMzMzMzMzMzQsIC0xMjkuNzgyODkxNDMyMTEyMjIpIHJvdGF0ZSgzMCwgMCwgMzAuNjY2NjY2NjY2NjY2NjY4KSIgIC8+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjMwLjY2NjY2NjY2NjY2NjY2OCIgaGVpZ2h0PSIzMC42NjY2NjY2NjY2NjY2NjgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xNDEzMzMzMzMzMzMzMzMzNCIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InNjYWxlKC0xLCAtMSkgdHJhbnNsYXRlKC0xMjkuNzgyODkxNDMyMTEyMjIsIC0xMjkuNzgyODkxNDMyMTEyMjIpIHJvdGF0ZSgzMCwgMCwgMzAuNjY2NjY2NjY2NjY2NjY4KSIgIC8+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjMwLjY2NjY2NjY2NjY2NjY2OCIgaGVpZ2h0PSIzMC42NjY2NjY2NjY2NjY2NjgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4xMDY2NjY2NjY2NjY2NjY2NyIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InNjYWxlKDEsIC0xKSB0cmFuc2xhdGUoMTUuMzMzMzMzMzMzMzMzMzM0LCAtMTUyLjIzMjQ0OTUzMDg5MTEzKSByb3RhdGUoLTMwLCAwLCAwKSIgIC8+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjMwLjY2NjY2NjY2NjY2NjY2OCIgaGVpZ2h0PSIzMC42NjY2NjY2NjY2NjY2NjgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNTQ2NjY2NjY2NjY2NjY2NyIgc3Ryb2tlLXdpZHRoPSIxIiB0cmFuc2Zvcm09InNjYWxlKC0xLCAtMSkgdHJhbnNsYXRlKC0xMjkuNzgyODkxNDMyMTEyMjIsIC0xNTIuMjMyNDQ5NTMwODkxMTMpIHJvdGF0ZSgtMzAsIDAsIDApIiAgLz48L3N2Zz4=);"></div>
                                        <h3 class="exploregrid-item-title">
                                            Player Requests
                                        </h3>
                                        <p>No Requests in the last 30 days.</p>
                                    </a>
                                </li>
                                <li class="col-12 mb-12 exploregrid-item-wrap" style="margin-top: 20px;">
                                    <a href="{{route('requests.index')}}" class="exploregrid-item px-4 pt-5 pb-6">
                                        <div class="exploregrid-item-header" style="background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxODYiIGhlaWdodD0iMTg2Ij48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMTA5LCAxOTYsIDY0KSIgIC8+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMjQwMDAwMDAwMDAwMDAwMTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0zMS4xMTksLTMxLjExOSkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMjQwMDAwMDAwMDAwMDAwMTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE1NS41OTUsLTMxLjExOSkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMjQwMDAwMDAwMDAwMDAwMTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0zMS4xMTksMTU1LjU5NDk5OTk5OTk5OTk3KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEyNDAwMDAwMDAwMDAwMDAxOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTU1LjU5NSwxNTUuNTk0OTk5OTk5OTk5OTcpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAsLTE1LjU1OTUpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAsMTcxLjE1NDQ5OTk5OTk5OTk4KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjEzMjY2NjY2NjY2NjY2NjY1OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzEuMTE5LC0zMS4xMTkpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTMyNjY2NjY2NjY2NjY2NjU7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMS4xMTksMTU1LjU5NDk5OTk5OTk5OTk3KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA5ODsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDYyLjIzOCwtMTUuNTU5NSkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Mi4yMzgsMTcxLjE1NDQ5OTk5OTk5OTk4KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjEzMjY2NjY2NjY2NjY2NjY1OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOTMuMzU3LC0zMS4xMTkpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTMyNjY2NjY2NjY2NjY2NjU7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5My4zNTcsMTU1LjU5NDk5OTk5OTk5OTk3KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMzMzOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI0LjQ3NiwtMTUuNTU5NSkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMzczMzMzMzMzMzMzMzMzMzsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyNC40NzYsMTcxLjE1NDQ5OTk5OTk5OTk4KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMxLjExOSwwLjApIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNTUuNTk1LDAuMCkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuMCwxNS41NTk1KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA4MDY2NjY2NjY2NjY2NjY2OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzEuMTE5LDAuMCkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNDY7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Mi4yMzgsMTUuNTU5NSkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMzMzNDsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDkzLjM1NywwLjApIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY2NjY3OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI0LjQ3NiwxNS41NTk1KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA2MzMzMzMzMzMzMzMzMzM0OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMxLjExOSwzMS4xMTkpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzMzQ7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNTUuNTk1LDMxLjExOSkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuMCw0Ni42Nzg1KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjExNTMzMzMzMzMzMzMzMzM0OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzEuMTE5LDMxLjExOSkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Mi4yMzgsNDYuNjc4NSkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMTUzMzMzMzMzMzMzMzMzNDsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDkzLjM1NywzMS4xMTkpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjQuNDc2LDQ2LjY3ODUpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTMyNjY2NjY2NjY2NjY2NjU7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMzEuMTE5LDYyLjIzOCkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NjY2NTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE1NS41OTUsNjIuMjM4KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wLDc3Ljc5NzQ5OTk5OTk5OTk5KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA0NjsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMxLjExOSw2Mi4yMzgpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzMzQ7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Mi4yMzgsNzcuNzk3NDk5OTk5OTk5OTkpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzMzQ7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5My4zNTcsNjIuMjM4KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI0LjQ3Niw3Ny43OTc0OTk5OTk5OTk5OSkgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzIwMDAwMDAwMDAwMDAwMTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0zMS4xMTksOTMuMzU3KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA3MjAwMDAwMDAwMDAwMDAxOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTU1LjU5NSw5My4zNTcpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTA2NjY2NjY2NjY2NjY2Njc7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAsMTA4LjkxNjQ5OTk5OTk5OTk4KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEwNjY2NjY2NjY2NjY2NjY3OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzEuMTE5LDkzLjM1Nykgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NjY2NTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDYyLjIzOCwxMDguOTE2NDk5OTk5OTk5OTgpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDYzMzMzMzMzMzMzMzMzMzQ7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5My4zNTcsOTMuMzU3KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMzMzOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI0LjQ3NiwxMDguOTE2NDk5OTk5OTk5OTgpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTI0MDAwMDAwMDAwMDAwMDE7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMzEuMTE5LDEyNC40NzYwMDAwMDAwMDAwMykgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMjQwMDAwMDAwMDAwMDAwMTsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE1NS41OTUsMTI0LjQ3NjAwMDAwMDAwMDAzKSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEyNDAwMDAwMDAwMDAwMDAxOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMxLjExOSwtNjIuMjM3OTk5OTk5OTk5OTQpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAsMTQwLjAzNTUwMDAwMDAwMDA0KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjE1OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wLC00Ni42Nzg0OTk5OTk5OTk5Mykgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMS4xMTksMTI0LjQ3NjAwMDAwMDAwMDAzKSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA5ODsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMxLjExOSwtNjIuMjM3OTk5OTk5OTk5OTQpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTA2NjY2NjY2NjY2NjY2Njc7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Mi4yMzgsMTQwLjAzNTUwMDAwMDAwMDA0KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEwNjY2NjY2NjY2NjY2NjY3OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjIuMjM4LC00Ni42Nzg0OTk5OTk5OTk5Mykgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PGcgZmlsbD0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMzczMzMzMzMzMzMzMzMzMzsiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDkzLjM1NywxMjQuNDc2MDAwMDAwMDAwMDMpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDM3MzMzMzMzMzMzMzMzMzM7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5My4zNTcsLTYyLjIzNzk5OTk5OTk5OTk0KSByb3RhdGUoNDUsIDMxLjExOSwgMzEuMTE5KSIgPjxyZWN0IHg9IjIyLjAiIHk9IjAiIHdpZHRoPSIyMi4wIiBoZWlnaHQ9IjY2LjAiICAvPjxyZWN0IHg9IjAiIHk9IjIyLjAiIHdpZHRoPSI2Ni4wIiBoZWlnaHQ9IjIyLjAiICAvPjwvZz48ZyBmaWxsPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA1NDY2NjY2NjY2NjY2NjY3OyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI0LjQ3NiwxNDAuMDM1NTAwMDAwMDAwMDQpIHJvdGF0ZSg0NSwgMzEuMTE5LCAzMS4xMTkpIiA+PHJlY3QgeD0iMjIuMCIgeT0iMCIgd2lkdGg9IjIyLjAiIGhlaWdodD0iNjYuMCIgIC8+PHJlY3QgeD0iMCIgeT0iMjIuMCIgd2lkdGg9IjY2LjAiIGhlaWdodD0iMjIuMCIgIC8+PC9nPjxnIGZpbGw9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDU0NjY2NjY2NjY2NjY2Njc7IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjQuNDc2LC00Ni42Nzg0OTk5OTk5OTk5Mykgcm90YXRlKDQ1LCAzMS4xMTksIDMxLjExOSkiID48cmVjdCB4PSIyMi4wIiB5PSIwIiB3aWR0aD0iMjIuMCIgaGVpZ2h0PSI2Ni4wIiAgLz48cmVjdCB4PSIwIiB5PSIyMi4wIiB3aWR0aD0iNjYuMCIgaGVpZ2h0PSIyMi4wIiAgLz48L2c+PC9zdmc+);"></div>
                                        <h3 class="exploregrid-item-title">
                                            Retailer Requests
                                        </h3>
                                        <p>No Requests in the last 30 days.</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container js-explore-newsletter-subscription-container">
        <div class="thread-subscription-status clearfix">
            <svg aria-hidden="true" class="octicon octicon-radio-tower" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M4.79 6.11c.25-.25.25-.67 0-.92-.32-.33-.48-.76-.48-1.19 0-.43.16-.86.48-1.19.25-.26.25-.67 0-.92a.613.613 0 0 0-.45-.19c-.16 0-.33.06-.45.19-.57.58-.85 1.35-.85 2.11 0 .76.29 1.53.85 2.11.25.25.66.25.9 0zM2.33.52a.651.651 0 0 0-.92 0C.48 1.48.01 2.74.01 3.99c0 1.26.47 2.52 1.4 3.48.25.26.66.26.91 0s.25-.68 0-.94c-.68-.7-1.02-1.62-1.02-2.54 0-.92.34-1.84 1.02-2.54a.66.66 0 0 0 .01-.93zm5.69 5.1A1.62 1.62 0 1 0 6.4 4c-.01.89.72 1.62 1.62 1.62zM14.59.53a.628.628 0 0 0-.91 0c-.25.26-.25.68 0 .94.68.7 1.02 1.62 1.02 2.54 0 .92-.34 1.83-1.02 2.54-.25.26-.25.68 0 .94a.651.651 0 0 0 .92 0c.93-.96 1.4-2.22 1.4-3.48A5.048 5.048 0 0 0 14.59.53zM8.02 6.92c-.41 0-.83-.1-1.2-.3l-3.15 8.37h1.49l.86-1h4l.84 1h1.49L9.21 6.62c-.38.2-.78.3-1.19.3zm-.01.48L9.02 11h-2l.99-3.6zm-1.99 5.59l1-1h2l1 1h-4zm5.19-11.1c-.25.25-.25.67 0 .92.32.33.48.76.48 1.19 0 .43-.16.86-.48 1.19-.25.26-.25.67 0 .92a.63.63 0 0 0 .9 0c.57-.58.85-1.35.85-2.11 0-.76-.28-1.53-.85-2.11a.634.634 0 0 0-.9 0z"></path></svg>
      <span class="explore-signup-cta">
      <a href="{{route('business.create')}}" class="btn btn-primary">Create a Business</a>
      </span>
            <p class="reason">Run a site or store, add your business and once approved start accepting <strong>PlayerCheck</strong> members instantly. Plus its free.</p>
        </div>
    </div>
@endsection

@section('script')
@endsection