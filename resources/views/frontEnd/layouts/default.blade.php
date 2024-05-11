<!doctype html>

<html>

<head>

    @include('frontEnd.partial.head')

</head>

<body>
    @include('frontEnd.partial.header')
    <div id="main">
        @yield('content')
    </div>
    <div class="container-fluid">
        @include('frontEnd.partial.footer')

    </div>
    @include('frontEnd.partial.foot')
</body>

</html>
