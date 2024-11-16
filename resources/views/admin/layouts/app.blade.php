@include('admin.layouts.head')

@stack('css')

<body class="nav-md">
    <div class="container body">
      <div class="main_container">

@include('admin.layouts.topbar')

@include('admin.layouts.sidebar')

@yield('content')

@include('admin.layouts.footer')
@stack('js')
@include('admin.layouts.tail')  