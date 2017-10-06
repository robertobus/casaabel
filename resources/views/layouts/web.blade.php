<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    @section('htmlheader')
        @include('layouts.partials.web.htmlheader')
    @show
</head>

<body>

<!-- Page Wrapper -->
<div class="wrapper">

    <!-- Main Header -->
    @include('layouts.partials.web.mainheader')

    <!-- Slider -->
    @include('layouts.partials.web.slider')

    <!-- Main Content -->
    <div class="main-content">
        @yield('main-content')
    </div>

    <!-- Footer -->
    @include('layouts.partials.web.footer')

    <!-- Scroll to top -->
    @include('layouts.partials.web.scrolltop')

            <!-- Scripts -->
    @section('scripts')
        @include('layouts.partials.web.scripts')
    @show

</div><!-- / Wrapper End -->

</body>
</html>
