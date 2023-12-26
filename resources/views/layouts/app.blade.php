<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD Practice 1</title>

    {{-- Fonts --}}
    @include('partials.fonts')


    {{-- Styles --}}
    @include('partials.styles')

    @yield('styles')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        {{-- Navbar --}}
        @include('partials.navbar')
        {{-- Sidebar --}}
        @include('partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{-- Page Header --}}
            @yield('page-header')

            {{-- Main Content --}}
            @yield('main-content')
        </div>
        <!-- /.content-wrapper -->

        {{-- Footer --}}
        @include('partials.footer')

    </div>
    <!-- ./wrapper -->

    {{-- Modals --}}
    @yield('modals')

    {{-- Scripts --}}
    @include('partials.scripts')

    @yield('scripts')
</body>

</html>
