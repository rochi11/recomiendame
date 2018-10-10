@include('admin.layouts.partials2.htmlheader')
<body>
<div id="app">
@include('admin.layouts.partials2.sidebar')
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    @include('admin.layouts.partials2.navbar')
    <div class="content pb-0">
        @yield('content')
    </div> <!-- .content -->
    <div class="clearfix"></div>
    @include('admin.layouts.partials2.footer')
</div>
</div>
@include('admin.layouts.partials2.scripts')
</body>
</html>
