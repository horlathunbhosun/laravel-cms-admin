<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
    </title>
    <!-- Favicon -->
    @include('layouts._partial.header')
</head>

<body class="">

@include('layouts._partial.aside')
<div class="main-content">
    <!-- Navbar -->
    @include('layouts._partial.nav')
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
           @yield('content', 'Default Content')
        </div>
    </div>

</div>
<!--   Core   -->
@include('layouts._partial.footer')

</body>

</html>
