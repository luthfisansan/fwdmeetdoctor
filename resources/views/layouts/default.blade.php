<!DOCTYPE html>
<html lang="en">
    <head>

        @include('includes.Frontsite.meta')

        <title>@yield('title') | MeetDoctor</title>

        @stack('before-style')
            @include('includes.Frontsite.style')
        @stack('after-style')

    </head>
    <body>
        @include('sweetalert::alert')

        @include('components.Frontsite.header')
            @yield('content')
        @include('components.Frontsite.footer')

        @stack('before-script')
            @include('includes.Frontsite.script')
        @stack('after-script')

    </body>
</html>