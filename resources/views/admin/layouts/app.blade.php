<!-- Seccion de html header -->
@include('admin.layouts.partials.htmlheader')
<body>
<!-- Seccion de navbar izquierda -->
@include('admin.layouts.partials.sidebar')
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Seccion de header arriba -->
    @include('admin.layouts.partials.nav')
    <div class="content pb-0">
    @yield('content')
    </div> <!-- .content -->
    <div class="clearfix"></div>

    <!-- Seccion de footer -->
    @include('admin.layouts.partials.footer')
</div><!-- /#right-panel -->
<!--Seccion de scripts-->
@include('admin.layouts.partials.scripts')
<div id="container">
</div>
</body>
</html>




