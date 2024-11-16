@include('admin.auth.layouts.head')

@stack('css')

<body class="login">

@yield('content')

@stack('js')
@include('admin.auth.layouts.tail')  