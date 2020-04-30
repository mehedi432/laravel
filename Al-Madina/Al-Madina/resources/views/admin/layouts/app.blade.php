@include('admin.layouts.master')
<body class="hold-transition sidebar-collapse">
      @include('admin.includes.nav')
      @include('admin.includes.aside')

      <div class="container">
        @yield('content')
      </div>
</body>

</html>