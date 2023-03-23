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
        @yield('content')

        @stack('before-script')
            @include('includes.Frontsite.script')
        @stack('after-script')

        {{-- modals --}}
        {{-- if you have a modal, create here --}}

    </body>
</html>