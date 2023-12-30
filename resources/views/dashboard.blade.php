<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
@include('layouts_backend.head')

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
      class="bg-[#EEF0FC] dark:bg-gray-900">

<!-- leftbar-tab-menu -->


@include('layouts_backend.sidebar')

@include('layouts_backend.nav')

@yield('content')

@include('layouts_backend.footer')

</body>
</html>
