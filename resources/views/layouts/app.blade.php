@include('layouts.head')
@stack('css')

<body class="page-index">

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    @stack('js')
    @include('layouts.wa')
    @include('layouts.tail')
