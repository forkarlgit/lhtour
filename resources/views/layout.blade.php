<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

    @include('includes.common')

    @yield('page_header_includes')

    <!-- Document Title
    ============================================= -->
	<title>{{ $page_title }}</title>

</head>

<body class="stretched no-transition">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        @include('header')

        @yield('content')

        @include('footer')

    </div><!-- #wrapper end -->

    @include('includes.footer_scripts')

    @yield('page_footer_includes')


</body>
</html>
