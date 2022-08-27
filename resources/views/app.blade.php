<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravue Store Admin Dashboard</title>
    <meta name="description" content="Laravue Store Admin Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('before-style')
    @include('layouts.style')
    @stack('after-style')
</head>

<body>
    @include('layouts.sidebar')

    <div id="right-panel" class="right-panel">
        @include('layouts.navbar')

        <div class="content">
            @yield('content')
        </div>
        <div class="clearfix"></div>
    </div>

    @stack('before-script')
    @include('layouts.script')
    @stack('after-script')
</body>

</html>
