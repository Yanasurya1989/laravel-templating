<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('inititle')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
        </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('blogAdmin') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{ asset('blogAdmin') }}/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Graph CSS -->
    <link href="{{ asset('blogAdmin') }}/css/lines.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('blogAdmin') }}/css/font-awesome.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="{{ asset('blogAdmin') }}/js/jquery.min.js"></script>
    <!----webfonts--->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet"
        type="text/css" />
    <!---//webfonts--->
    <!-- Nav CSS -->
    <link href="{{ asset('blogAdmin') }}/css/custom.css" rel="stylesheet" />
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('blogAdmin') }}/js/metisMenu.min.js"></script>
    <script src="{{ asset('blogAdmin') }}/js/custom.js"></script>
    <!-- Graph JavaScript -->
    <script src="{{ asset('blogAdmin') }}/js/d3.v3.js"></script>
    <script src="{{ asset('blogAdmin') }}/js/rickshaw.js"></script>

    {{-- summernote --}}
    <title>Summernote</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    {{-- end summernote --}}
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->

        @include('backEnd.layout.nav')

        <div id="page-wrapper">
            <div class="graphs">

                @yield('inikontent')

                @include('backEnd.layout.footer')
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('blogAdmin') }}/js/bootstrap.min.js"></script>

   
</body>

</html>
