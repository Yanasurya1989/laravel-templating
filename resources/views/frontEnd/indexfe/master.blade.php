<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Yayasan Baiturrahman</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('UpConstruction') }}/assets/img/favicon.png" rel="icon">
    {{-- <link href="{{ asset('UpConstruction') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}
   
    {{-- @foreach ($head as $list)
    @endforeach --}}

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('UpConstruction') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('UpConstruction') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('UpConstruction') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('UpConstruction') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('UpConstruction') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('UpConstruction') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('UpConstruction') }}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('frontEnd.indexfe.header')
    <!-- ======= End Header ======= -->


    <!-- ======= Hero Section ======= -->
    @include('frontEnd.indexfe.hero')
    <!-- ======= End Hero Section ======= -->

    <main id="main">
        <!-- ======= Get Started Section ======= -->
        <!-- ======= End Get Started Section ======= -->

        <!-- ======= Constructions Section ======= -->
        <!-- ======= End Constructions Section ======= -->

        <!-- ======= Services Section ======= -->
        <!-- ======= End Services Section ======= -->

        <!-- ======= Alt Services Section ======= -->
        <!-- ======= End Alt Services Section ======= -->

        <!-- ======= Features Section ======= -->
        @include('frontEnd.indexfe.feature')
        <!-- ======= End Features Section ======= -->

        <!-- ======= Our Projects Section ======= -->
        @include('frontEnd.indexfe.project')
        <!-- ======= End Our Projects Section ======= -->

        <!-- ======= Testimonials Section ======= -->
        <!-- ======= End Testimonials Section ======= -->

        <!-- ======= Recent Blog Posts Section ======= -->
        @include('frontEnd.indexfe.recentblog')
        <!-- ======= End Recent Blog Posts Section ======= -->

        <!-- ======= Recent Blog Posts Section ======= -->
        @include('frontEnd.indexfe.kategoryArtikel')
        <!-- ======= End Recent Blog Posts Section ======= -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- ======= End Footer ======= -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('UpConstruction') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('UpConstruction') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('UpConstruction') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('UpConstruction') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('UpConstruction') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('UpConstruction') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('UpConstruction') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('UpConstruction') }}/assets/js/main.js"></script>

</body>

</html>
