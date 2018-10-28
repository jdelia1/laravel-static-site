<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Static Site - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('partials._stylesheets')
        @yield('stylesheets')
    </head>
    <body>
        @include('partials._navbar')
        @include('partials._messages')
        <div class="container mt-3" id="body-container">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('partials._scripts')
        @yield('scripts')
    </body>
</html>