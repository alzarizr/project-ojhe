@include('admin.layouts.head')

@stack('css')

<body class="nav-md">
    <div class="container body">
      <div class="main_container">

@yield('content')

@stack('js')
@include('admin.layouts.tail')  